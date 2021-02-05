<template>
    <div class="card">
        <div class="card-header">
            Menambahkan Kategori Blog
        </div>
        <div class="card-body">
            <form @submit.prevent="StoreCategory">
                <div class="form-group">
                    <label for="">Nama Kategori</label>
                    <input type="text" v-model="category.name" class="form-control">
                </div>
                <button class="btn btn-success">Simpan</button>
            </form>
        </div>
    </div>
</template>

<script>
export default {
    data(){
        return{
            category:{}
        }
    },
    methods: {
        StoreCategory(){
            let uri = `/api/admin/blog/category/create`;
            this.axios.post(uri, this.category).then((response) => {
                this.$swal.fire("Berhasil")
                this.$router.push({'name' : 'admin-blog-category'})
            })
        }
    }
}
</script>