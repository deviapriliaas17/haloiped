<template>
    <div class="card">
        <div class="card-header">Focus</div>
        <div class="card-body">
            <form @submit.prevent="CreateFocus">
                <div class="form-group">
                    <label for="">Nama</label>
                    <input type="text" class="form-control" v-model="focus.name">
                </div>
                <div class="form-group">
                    <label for="">Deskripsi</label>
                    <input type="text" v-model="focus.description" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Icon</label>
                    <input type="text" class="form-control" v-model="focus.icon">
                </div>
                <div class="form-group">
                    <label for="">Posisi</label>
                    <input type="text" class="form-control" v-model="focus.position">
                </div>
                <button class="btn btn-success mt-3">Simpan</button>
            </form>
        </div>
    </div>
</template>

<script>
export default {
    data(){
        return {
            focus:{
                name:'',
                position:'',
                icon:'',
                description:''
            },
        }
    },
    methods:{
        CreateFocus(){
            let uri = `/api/admin/focus/create`;
            this.axios.post(uri, this.focus).then((response)=> {
                this.$swal.fire("Berhasil");
            })
        }
    }
}
</script>