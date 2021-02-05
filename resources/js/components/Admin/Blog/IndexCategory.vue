<template>
    <div class="card">
        <div class="card-header">
            Daftar Kategori 
        </div>
        <div class="card-body">
            <router-link :to="{ name: 'admin-blog-category-create'}" class="btn btn-success mb-2"> Menambahkan Kategori </router-link>
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
                                <a href="javascript:;" @click="DeleteCategory(category.id)" class="btn btn-danger text-white mb-2">Hapus</a>
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
        DeleteCategory(id){
            this.$swal.fire({
                title : 'Apakah Kamu Yakin?',
                text : 'Jika di Hapus Maka Akan Menghapus Artikel yang Memiliki Kategori Ini Sekaligus',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor:'#d33',
                confirmButtonText:'Hapus',
                cancelButtonText:'Batalkan'
            }).then((result) => {
                if(result.value){
                    this.$swal.fire({
                        title: 'Berhasil',
                        text:'Berhasil Menghapus',
                        icon : 'success',
                        timer:1000
                    });
                    let uri = `/api/admin/blog/category/delete/${id}`;
                    this.axios.delete(uri).then(response => {
                        this.categories.splice(this.categories.indexOf(id), 1);
                    }); 
                    console.log('Success');
                }
            }) 
        }
    }
}
</script>