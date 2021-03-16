<template>
    <div class="card">
        <div class="card-header">
            Edit Jenis Pekerjaan
        </div>
        <div class="card-body">
            <form @submit.prevent="ChangeJob">
                <div class="form-group">
                    <label for="">Nama</label>
                    <input type="text" name="" id="" class="form-control" v-model="type.name">
                </div>
                <div class="form-group">
                    <label for="">Deskripsi</label>
                    <input type="text" class="form-control" v-model="type.description">
                </div>
                <div class="form-group">
                    <label for="">Icon</label>
                    <input type="text" class="form-control" v-model="type.icon">
                </div>
                <div class="form-group">
                    <label for="">Position</label>
                    <input type="text" class="form-control" v-model="type.position">
                </div>
                <button class="btn btn-success">Simpan</button>
            </form>
        </div>
    </div>
</template>

<script>
export default {
    data(){
        return {
            type:{}
        }
    },
    created() {
        let uri = `/api/admin/job-type/` + this.$route.params.id;
        this.axios.get(uri).then((response) => {
            this.type = response.data.type;
        });
    },
    methods : {
        ChangeJob(){
            let uri = `/api/admin/job-type/edit/` + this.$route.params.id;
            this.axios.post(uri,this.type).then((response) => {
                this.$swal.fire("Berhasil");
            });
        }
    }

}
</script>