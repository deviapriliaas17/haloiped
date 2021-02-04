<template>
    <div class="card">
        <div class="card-header">
            Daftar Kategori 
        </div>
        <div class="card-body">
            <div>
                <table class="table">
                    <thead class="bg-dark text-white">
                        <th>No</th>
                        <th>Nama</th>
                        <th>Aksi</th>
                    </thead>
                    <tbody>
                        <tr v-for="(category, index) in categories" :key="category.id">
                            <td>{{ index + 1}}</td>
                            <td>{{ category.name }}</td>
                            <td>
                                <router-link :to="{ name: 'admin-blog-category-edit', params: { id: category.id} }" class="btn btn-info mb-2">Edit</router-link>
                                <a href="javascript:;" v-on:click="DeleteCategory(category.id, index)" class="btn btn-danger text-white">Hapus</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data(){
        return{
            categories:[]
        }
    },
    created(){
        let uri = `/api/category`;
        this.axios.get(uri).then((response) => {
            this.categories = response.data;
        })
    },
    methods:{
        DeleteCategory(id, index){
            this.axios.get('/api/admin/blog/category/delete/'+id).then((response) => {
                this.$swal.fire("Berhasil");
                this.$router.push({ name : 'admin-blog'});
            })
        }
    }
}
</script>