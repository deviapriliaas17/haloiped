<template>
    <div class="card">
        <div class="card-header">
            Layout Blog
        </div>
        <div class="card-body">
           <form @submit.prevent="updateData">
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
                   <p v-if="url" class="mt-2">Upload Terbaru</p>
                   <img v-if="url" :src="url" class="img-thumbnail" alt="">
               </div>
               <div class="form-group">
                   <label for="">Text 1</label>
                   <input type="text" v-model="dataForm.section_2_text" class="form-control">
               </div>
               <div class="form-group">
                   <label for="">Text 2</label>
                   <input type="text" v-model="dataForm.section_3_text" class="form-control">
               </div>
               <div class="form-group">
                   <label for="">Text 3</label>
                   <input type="text" v-model="dataForm.section_4_text" class="form-control">
               </div>
               <div class="form-group">
                   <label for="">Text 4</label>
                   <input type="text" v-model="dataForm.section_5_text" class="form-control">
               </div>
               <button class="btn btn-success">Simpan</button>
           </form>
        </div>
    </div>
</template>

<script>
export default {
    data(){
        return {
            dataForm: {
                section_1_title:'',
                section_1_description:'',
                section_1_header:'',
                section_2_text:'',
                section_3_text:'',
                section_4_text:'',
                section_5_text:'',
                section_1_image:'',
            },
            url:'',
            newImage:'null',
        }
    },
    created() {
        let uri = `/api/admin/layout/blog`;
        this.axios.get(uri).then((response) => {
            this.dataForm = response.data;
        });
    },
    methods: {
        updateData(){
          let uri = `/api/admin/layout/blog/edit`;
          const formData = new FormData(); 
          formData.append("section_1_title", this.dataForm.section_1_title);
          formData.append("section_1_header", this.dataForm.section_1_header);
          formData.append("section_1_description", this.dataForm.section_1_description);
          formData.append("section_2_text", this.dataForm.section_2_text); 
          formData.append("section_3_text", this.dataForm.section_3_text); 
          formData.append("section_4_text", this.dataForm.section_4_text); 
          formData.append("section_5_text", this.dataForm.section_5_text);
          formData.append("section_1_image", this.newImage);
          this.axios.post(uri, formData).then((response) => {
              this.$swal.fire("Berhasil");
          })
        },
        changeImage(e){
            let file = e.target.files[0];
            this.newImage = e.target.files[0];
            this.url = URL.createObjectURL(file);
        }
    }
}
</script>