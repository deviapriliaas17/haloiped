<template>
    <div class="card">
        <div class="card-header">
            Login
        </div>
        <div class="card-body">
            <form @submit.prevent=login>
                <div class="form-group">
                    <label for="">E-mail</label>
                    <input type="email" name="" v-model="form.email" id="" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Password</label>
                    <input type="password" name="" v-model="form.password" id="" class="form-control">
                </div>
                <button class="btn btn-success mt-2">Simpan</button>
            </form>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            form:{
                email:'',
                password:'',
            }
        }
    }, 
    methods:{
        login(){
            let uri = `/api/login`;
            this.axios.post(uri,this.form).then((response) => {
                this.$routes.push({name : 'admin-blog'})
            });
        }
    }
}
</script>