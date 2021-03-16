<template>
    <div class="card">
        <div class="card-header">
            Menambahkan Jenis Pekerjaan
        </div>
        <div class="card-body">
            <form @submit.prevent="CreateJob">
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
                    <input type="number" class="form-control" v-model="type.position">
                </div>
                <button class="btn btn-success">Simpan</button>
            </form>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
           type : {
            name: null,
            description: null,
            icon:null,
            description:null
           }
        }
    },
    methods : {
        CreateJob(){
            let uri =`/api/admin/job-type/create`;
            if(this.type.name == null){
                this.$swal.fire("Isi Data Terlebih Dahulu");
            }
            this.axios.post(uri, this.type).then((response) => {
                this.$swal.fire("Berhasil")
            });
        }
    }
}
</script>