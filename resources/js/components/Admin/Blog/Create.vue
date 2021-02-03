<template>
    <div class="card">
        <div class="card-header">
            Menambahkan Blog
        </div>
        <div class="card-body">
            <form @submit.prevent="StoreForm" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="">Title</label>
                    <input type="text" name="title" id="title" class="form-control" v-model="formFields.title">
                </div>
                <div class="form-group">
                    <label for="">Content</label>
                    <textarea name="content" id="content" cols="5" rows="5" class="form-control" v-model="formFields.content"></textarea>
                </div>
                <div class="form-group">
                    <label for="">Tanggal Publish</label>
                    <input type="date" name="" class="form-control" id="" v-model="formFields.publish">
                </div>
                <div class="form-group">
                    <label for="">Gambar</label>
                    <input type="file" name="file" id="" class="form-control" @change="fileChange">
                </div>
                <div class="form-group">
                    <label for="">Kategori</label>
                    <select name="category" id="" class="form-control" v-model="formFields.category_id" >
                        <option v-for="(category) in categories" :key="category.id" :value="category.id">{{ category.name }}</option>
                    </select>
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
            categories:[],
            formFields:{
                title:'',
                content:'',
                publish:'',
                category_id:'',
                image:'',
            },
        }
    },
    created(){
        let uri = `/api/category`;
        this.axios.get(uri).then((response) => {
            this.categories = response.data;
        })
    }, 
    methods: {
        fileChange(event){
            this.formFields.image = event.target.files[0];
        },
        StoreForm(){
            let formData = new FormData;
            formData.append("title", this.formFields.title);
            formData.append("content",this.formFields.content);
            formData.append("publish", this.formFields.publish);
            formData.append("category_id", this.formFields.category_id);
            formData.append("image", this.formFields.image);

            let uri = `/api/admin/blog/create`;
            this.axios.post(uri, formData).then((response) => {
                this.$swal.fire("Berhasil")
            })
        }
    }
  
}
</script>