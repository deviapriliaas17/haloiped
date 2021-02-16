<template>
    <div class="card">
        <div class="card-header">
            Layout Portfolio
        </div>
        <div class="card-body">
           <form @submit.prevent="UpdateData">
               <div class="form-group">
                   <label for="">Header 1</label>
                   <input type="text" v-model="dataForm.section_1_header" class="form-control">
               </div>
               <div class="form-group">
                   <label for="">Title 1</label>
                   <input type="text" v-model="dataForm.section_1_title" class="form-control">
               </div>
               <div class="form-group">
                   <label for="">Description 1</label>
                   <input type="text" v-model="dataForm.section_1_description" class="form-control">
               </div>
               <div class="form-group">
                   <label for="">Image 1</label>
                   <input type="file"  class="form-control" @change="changeImage">
                   <img :src="'/uploads/uploads/' + dataForm.section_1_image" alt="" class="img-thumbnail">
                   <p v-if="url">Upload Terbaru</p>
                   <img v-if="url" :src="url" alt="" class="img-thumbnail">
               </div>
               <div class="form-group">
                   <label for="">Title 2</label>
                   <input type="text" v-model="dataForm.section_2_title" class="form-control">
               </div>
               <div class="form-group">
                   <label for="">Description 2</label>
                   <input type="text" v-model="dataForm.section_2_description" class="form-control">
               </div>
               <div class="form-group">
                   <label for="">Description</label>
                   <input type="text" v-model="dataForm.description" class="form-control">
               </div>
               <div class="form-group">
                   <label for="">Keyphrase</label>
                   <input type="text" v-model="dataForm.keyphrase" class="form-control">
               </div>
               <div class="form-group">
                   <label for="">Title</label>
                   <input type="text" v-model="dataForm.title" class="form-control">
               </div>
               <button class="btn btn-success mt-2">Simpan</button>
           </form>
        </div>
    </div>
</template>

<script>
export default {
    data(){
        return {
            dataForm : {
                section_1_header:'',
                section_1_description:'',
                section_1_title:'',
                secton_1_image:'',
                section_2_title:'',
                section_2_description:'',
                keyphrase:'',
                description:'',
                title:'',
            },
            url: '',
            newImage:'',
        }
    }, 
    created(){
        let uri = `/api/admin/layout/portfolio`;
        this.axios.get(uri).then((response) => {
            this.dataForm = response.data;
        });
    },
    methods : {
        changeImage(event){
            let file = event.target.files[0];
            this.newImage = event.target.files[0];
            this.url = URL.createObjectURL(file);
        },
        UpdateData(){
            let uri = `/api/admin/layout/portfolio/edit`;
            let formData = new FormData();
            formData.append("section_1_title", this.dataForm.section_1_title);
            formData.append("section_1_description", this.dataForm.section_1_description);
            formData.append("section_1_header", this.dataForm.section_1_header); 
            formData.append("section_1_image", this.newImage);
            formData.append("section_2_title", this.dataForm.section_2_title);
            formData.append("section_2_description", this.dataForm.section_2_description);
            formData.append("description", this.dataForm.description);
            formData.append("keyphrase", this.dataForm.keyphrase);
            formData.append("title", this.dataForm.title);
            this.axios.post(uri, formData).then((response) => {
                this.$swal.fire("Berhasil");
            })
        }
    }
}
</script>