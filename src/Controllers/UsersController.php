<?php

namespace Dsalinas\LPUI\Controllers;
use Illuminate\Http\Request;


/**
 * Class UsersController
 * @package Dsalinas\LPUI\Controllers
 */
class UsersController extends Controller
{

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function modulo()
    {
        return view('lpui::users');
    }

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $data = config('lpui.models.user')::query()->with(['permissions', 'roles'])->get();

        return response()->json($data, 200);
    }


    /**
     * @param $user
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($user)
    {
        $data = config('lpui.models.user')::findOrFail($user);
        return response()->json($data, 204);
    }

    /**
     * @param $user
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($user)
    {
        config('lpui.models.user')::findOrFail($user)->delete();
        return response()->json(null, 204);
    }

    /**
     * @param Request $request
     * @return mixed
     */
    public function store(Request $request)
    {
        $data = $this->validate($request, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);

        return config('lpui.models.user')::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }

    public function update(Request $request, $user)
    {
        $rs = $data = config('lpui.models.user')::findOrFail($user);
        $data = $this->validate($request, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
        $rs->fill($data);
        $rs->save();
    }

}