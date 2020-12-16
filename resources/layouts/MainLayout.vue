<template>
<div>
    <div>
  <nav class="navbar navbar-expand-lg navbar-black bg-black">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <router-link to="/login">Logn</router-link>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
      <li class="nav-item">
        <!-- <a class="nav-link disabled" href="#">Disabled</a> -->
          <router-link :tag="'a'" class="nav-item" to="/login">Logn</router-link>

      </li>
      <li class="nav-item">
        <!-- <a class="nav-link disabled" href="#">Disabled</a> -->
          <router-link :tag="'a'" class="nav-item" to="/register">Register</router-link>

      </li>
    </ul>
    <button style='font-size:24px'>Account  <i class="bi bi-folder2"></i></button>
  </div>
</nav>
</div>
<div class="conteiner">
<router-view></router-view>
</div>
</div>
</template>
<script>
import axios from 'axios'
export default {
 data(){

return{
  AuthUserStatus: null
}

 },

  methods:{
     getAuthUserStatus(){
       let token = localStorage.getItem('token')
       axios.post( 'api/auth/me', token ).then(res => {console.log(res.data)}).catch(e=>console.error(e))
     }


  },

    mounted() {
        this.getAuthUserStatus()


    }
};
</script>
