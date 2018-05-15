<template>
  <div class="table-responsive">
    <table class="table">
      <thead>
      <tr>
        <th>No</th>
        <th>Nombre</th>
        <th>Correo</th>
        <th>Roles</th>
        <th>Permisos</th>
        <th>
          <div class="btn-group">
            <button type="button" class="btn btn-primary"><span class="fa fa-plus-square-o"></span> Nuevo</button>
          </div>
        </th>
      </tr>
      </thead>
      <tbody>
        <loading :size="20" :visible="loading"></loading>
        <item-lista-usuarios v-for="(item, index) in users" :endpoint-url="endpointUrl" :index="index" :item="item" :key="index"></item-lista-usuarios>
      </tbody>
    </table>
  </div>
</template>

<script>
  import toastr from 'toastr'
  import Loading from 'loading-vue-indicator'
  import ItemListaUsuarios from './ItemListaUsuarios'
  export default {
    name: 'ListaUsuarios',
    components: {ItemListaUsuarios, Loading},
    props: {
      endpointUrl: {
        type: String,
        default: '/users'
      }
    },
    data () {
      return {
        loading: false,
        users: [],
      }
    },
    mounted () {
      this.loadUsers()
    },
    methods: {
      loadUsers () {
        this.loading = true
        let url = `${this.endpointUrl}`
        axios.get(url)
          .then(resp => {
            this.loading = false
            this.users = resp.data
            toastr.success('completado', 'completado')
          })
          .catch(err => {
            this.loading = false
          })
      }
    }
  }
</script>

<style scoped>

</style>