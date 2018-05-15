# UI for spatie-laravel-permission


```bash
composer require darwinsalinas/laravel-permission-ui
```


```bash
php artisan vendor:publish --provider="Dsalinas\LPUI\LaravelPermissionUIServiceProvider" --tag="config"
php artisan vendor:publish --provider="Dsalinas\LPUI\LaravelPermissionUIServiceProvider" --tag="lpui-components"
```

```bash
npm install --save sweetalert toastr loading-vue-indicator
```

```js
Vue.component('manage-users', require('./components/lpui/Usuarios/Usuarios.vue'));
Vue.component('manage-roles', require('./components/lpui/Usuarios/Roles.vue'));
Vue.component('manage-permissions', require('./components/lpui/Usuarios/Permissions.vue'));
```


```html
<manage-users :endpoint-url="'{{config('lpui.url.users')}}'"></manage-users>
<manage-roles :endpoint-url="'{{config('lpui.url.roles')}}'"></manage-roles>
<manage-permissions :endpoint-url="'{{config('lpui.url.permissions')}}'"></manage-permissions>
```

```php
return [
    /**
     * The endpoint for each model.
     */
    'url' => [
        'users' => 'admin/usuarios',
        'roles' => 'admin/roles',
        'permissions' => 'admin/permisos',
    ],

    /**
     * The middleware(s) to apply before attempting to access
     */
    'middlewares' => ['web', 'auth'],

    /**
     * User Model
     */
    'models' => [
        'user' => App\User::class
    ],

    /**
     * Table Name
     */
    'table_names' => [
        'users' => 'users',
    ],

];
```
