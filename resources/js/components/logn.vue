<template>
    <div>
     <div class="col-md-6" >
        <form class="form-group" @submit.prevent="login()">
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" v-model="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" v-model="password"  id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit"  class="btn btn-primary">Submit</button>
</form>
    </div>
    </div>
</template>
<script> 
import axios from 'axios'
export default {
    data(){
        return{
            email: '',
            password: ''
        }
    },
    methods:{
        login(){
            let data = {
                email: this.email,
                password:this.password
            }
          axios.post('api/auth/login', data).then(
              res => {
                  console.log(res.data.access_token)

                  localStorage.setItem('token', res.data.access_token)
              }
          ).catch(e => {
              console.log(e)
          })
        }
    }

}
</script>