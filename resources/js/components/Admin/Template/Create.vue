<template>
    <div class="card">
        <div class="card-header">
            Menambahkan Nama Template
        </div>
        <div class="card-body">
            <form @submit.prevent="AddData">
                <div class="form-group">
                    <div class="form-group">
                        <label for="">Nama Template</label>
                        <input type="text" v-model="datas.name" class="form-control">
                    </div>
                    <button class="btn btn-success mt-2">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</template>

<script>
export default {
  watch: {
  },
    data(){
        return {
            datas : {
                name:''
            }
        }
    },
    methods: {
        AddData(){
            let uri  = `/api/admin/template/create`;
            this.axios.post(uri, this.datas).then((response) => {
                this.$swal.fire("Berhasil");
            });
        }
    }
}
</script>