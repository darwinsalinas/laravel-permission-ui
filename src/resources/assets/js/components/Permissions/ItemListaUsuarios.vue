<template>
  <tr>
    <td scope="row">{{index+1}}</td>
    <td>{{item.name}}</td>
    <td>{{item.email}}</td>
    <td>{{item.roles.map(rol => rol.name).join()}}</td>
    <td>{{item.permissions.map(permiso => permiso.name).join()}}</td>
    <td>
      <div class="btn-group">
        <button type="button" class="btn btn-primary"><span class="fa fa-pencil-square-o"></span></button>
        <button @click="deleteItem" type="button" class="btn btn-danger"><span class="fa fa-trash"></span></button>
      </div>
    </td>
  </tr>
</template>

<script>
  import toastr from 'toastr'
  export default {
    name: 'ItemListaUsuarios',
    props: {
      endpointUrl: {
        type: String,
        default: '/users'
      },
      item: {
        required: true
      },
      index: {
        required: true,
        type: Number
      }
    },
    methods: {
      deleteItem () {
        let url = `${this.endpointUrl}/${this.item.id}`
        axios.delete(url)
          .then(resp => {
            toastr.success('Eliminado con exito', 'completado')
          })
          .catch(err => {
            toastr.error('Error', 'error')
          })
      }
    }
  }
</script>

<style scoped>

</style>