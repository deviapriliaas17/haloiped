<template>
    <div class="card">
        <div class="card-header">
            Daftar Blog
        </div>
        <div class="card-body">
            <router-link :to="{ name:'admin-blog-create' }" class="btn btn-success mb-3">Menambahkan Blog</router-link>
            <router-link :to="{ name:'admin-blog-category' }" class="btn btn-info mb-3">Kategori Blog</router-link>
            <div class="table-responsive">
                <table class="table">
                    <thead class="bg-dark text-white">
                        <th>No</th>
                        <th>Title</th>
                        <th>Image</th>
                        <th>Category</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                        <tr v-for="(blog, index) in blogs" :key="blog.id">
                            <td>{{ index + 1}}</td>
                            <td>{{ blog.title }}</td>
                            <td><img :src="'/uploads/uploads/'+blog.image" alt="" class="img-fluid"></td>
                            <td>{{ blog.category.name }}</td>
                            <td>
                                <router-link :to="{ name: 'admin-blog-detail', params : { id : blog.id}}" class="btn btn-info"> Detail</router-link>
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
    data() {
        return{
            blogs:[]
        }
    },
    created(){
        let uri = `/api/admin/blog`;
        this.axios.get(uri).then((response) => {
            this.blogs = response.data;
        })
    }
}
</script>