<template>
    <div class="card">
        <div class="card-header">
            Detail Blog
        </div>
        <img :src="'/uploads/uploads/'+ datas.blog.image" :alt="datas.media.alt" class="card-img-top">
        <div class="card-body">
            <h5 class="card-title text-center">
                {{ datas.blog.title }} <span class="badge badge-info">{{ datas.blog.category.name }}</span>
            </h5>
            <p class="card-text">
                {{ datas.blog.content }}
            </p>
        </div>
    </div>
</template>

<script>
export default {
    data(){
        return {
            datas:{}
        }
    },
    created(){
        let uri = `/api/admin/blog/${this.$route.params.id}`;
        this.axios.get(uri).then((response) => {
            this.datas = response.data
        });
    }
}
</script>