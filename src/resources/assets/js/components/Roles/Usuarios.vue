<template>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-12">
        <div class="card card-dark">
          <div class="card-header">Gestión de usuarios</div>
          <div class="card-body">
            <ListaUsuarios></ListaUsuarios>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
  import swal from 'sweetalert'
  import toastr from 'toastr'
  import ListaUsuarios from './ListaUsuarios'
  export default {
    components: {ListaUsuarios},
  }
</script>
