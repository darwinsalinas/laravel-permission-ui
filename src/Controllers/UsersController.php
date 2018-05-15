<?php
/**
 * Created by PhpStorm.
 * User: darwin
 * Date: 15/5/18
 * Time: 11:09 AM
 */

namespace Dsalinas\LPUI\Controllers;


use Illuminate\Http\Response;


/**
 * Class UsersController
 * @package Dsalinas\LPUI\Controllers
 */
class UsersController extends Controller
{

    public function modulo()
    {
        $data = config('lpui.models.user')::query()->with(['permissions', 'roles'])->paginate(  );

        return response()->json([
            'data' => $data
        ], 200);
//        return view('lpui::users');
    }

    public function index()
    {
        $data = config('lpui.models.user')::query()->with(['permissions', 'roles'])->get();

        return response()->json([
            'data' => $data
        ], 200);
    }

    /**
     * @param User $user
     * @return \Illuminate\Http\JsonResponse
     * @throws \Exception
     */
    public function destroy(User $user)
    {
        $user->delete();

        return response()->json([
            'message' => 'success',
            'error' => false,
            'data' => $user->id
        ], Response::HTTP_NO_CONTENT);
    }

}