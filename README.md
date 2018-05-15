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
