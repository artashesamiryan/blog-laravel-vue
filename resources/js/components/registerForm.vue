<template>
    <div>
        <div class="col-md-6">
            <form class="form-group" @submit.prevent="Register()">
                <span v-if="success" style="color:blue; background-color:green"
                    ><h2>Register Success</h2>
                </span>
                <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input
                        type="text"
                        class="form-control"
                        v-model="name"
                        id="name"
                        aria-describedby="name"
                        placeholder="Enter Name"
                    />
                    <small id="emailHelp" class="form-text text-muted"
                        >We'll never share your email with anyone else.</small
                    >
                    <span v-if="errorData" style="color:red">{{
                        errorData.name[0] ? errorData.name[0] : ""
                    }}</span>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input
                        type="email"
                        class="form-control"
                        v-model="email"
                        id="exampleInputEmail1"
                        aria-describedby="emailHelp"
                        placeholder="Enter email"
                    />
                    <small id="emailHelp" class="form-text text-muted"
                        >We'll never share your email with anyone else.</small
                    >
                    <span v-if="errorData" style="color:red">{{
                        errorData.email[0] ? errorData.email[0] : ""
                    }}</span>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input
                        type="password"
                        class="form-control"
                        v-model="password"
                        id="exampleInputPassword1"
                        placeholder="Password"
                    />
                    <span v-if="errorData" style="color:red">{{
                        errorData.password[0] ? errorData.password[0] : ""
                    }}</span>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password Reset</label>
                    <input
                        type="password"
                        class="form-control"
                        v-model="password_confirmation"
                        id="PasswordReset"
                        placeholder="Password Reset"
                    />
                    <span v-if="passwordCheck" style="color:red"> error </span>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</template>
<script>
import axios from "axios";
export default {
    data() {
        return {
            name: "",
            email: "",
            password: "",
            password_confirmation: "",
            passwordCheck: false,
            errorData: null,
            success: false
        };
    },

    methods: {
        Register() {
            if (this.password !== this.password_confirmation) {
                this.passwordCheck = true;
                return;
            } else {
                let data = {
                    name: this.name,
                    email: this.email,
                    password: this.password,
                    password_confirmation: this.password_confirmation
                };
                this.passwordCheck = false;

                axios
                    .post("/register ", data)
                    .then(res => {
                        console.log(res.message);
                        // this.success = true
                        // toastr.info('success register')
                        this.$router.push("/login");
                    })
                    .catch(err => {
                        console.warn(err.response);
                        try {
                            this.errorData = err.response.data.errors;
                        } catch (e) {}
                        // console.log(this.errorData.name[0]);
                    });
            }
            //
        }
    }
};
</script>
