<template>
    <div class="card">
        <div class="card-header">
            Mengubah Kategori
        </div>
        <div class="card-body">
            <form action="" @submit.prevent="UpdateCategory">
                <div class="form-group">
                    <label for="">Nama Kategori</label>
                    <input type="text" v-model="category.name" id="name" class="form-control">
                </div> 
                <button class="btn btn-success mb-3">Simpan</button>
            </form>
        </div>
    </div>
</template>

<script>
export default {
    data(){
        return {
            category:{}
        }
    },
    created(){
        let uri = `/api/admin/blog/category/${this.$route.params.id}`;
        this.axios.get(uri).then((response) => {
            this.category = response.data;
        })
    },
    methods:{
        UpdateCategory(){
            let uri = `/api/admin/blog/category/edit/${this.$route.params.id}`
            this.axios.put(uri, this.category).then((response) => {
                this.$swal.fire("Berhasil")
            })
        }
    }
}
</script>