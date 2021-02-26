<template>
    <div class="card">
        <div class="card-header">
            Edit Nama Template
        </div>
        <div class="card-body">
            <form @submit.prevent="UpdateData">
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
    data(){
        return {
            datas: {
                name:''
            }
        }
    },
    created(){
        let uri = `/api/admin/template/`+ this.$route.params.id;
        this.axios.get(uri).then((response) => {
            this.datas = response.data.template
        });
    },
    methods: {
        UpdateData(){
            let uri  = `/api/admin/template/edit/` + this.$route.params.id;
            this.axios.post(uri, this.datas).then((response) => {
                this.$swal.fire("Berhasil");
            });
        }
    }
}
</script>