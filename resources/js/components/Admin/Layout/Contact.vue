<template>
    <div class="card">
        <div class="card-header">
            Layout Contact
        </div>
        <div class="card-body">
           <form @submit.prevent="UpdateContact">
               <div class="form-group">
                   <label for="">Header 1</label>
                   <input type="text" v-model="contact.section_1_header" class="form-control">
               </div>
               <div class="form-group">
                   <label for="">Title 1</label>
                   <input type="text" v-model="contact.section_1_title" class="form-control">
               </div>
               <div class="form-group">
                   <label for="">Description 1</label>
                   <input type="text" v-model="contact.section_1_description" class="form-control">
               </div>
               <div class="form-group">
                   <label for="">Image 1</label>
                   <input type="file"  class="form-control" @change="image1">
               </div>
               <div class="form-group">
                   <label for="">Title 2</label>
                   <input type="text" v-model="contact.section_2_title" class="form-control">
               </div>
               <div class="form-group">
                   <label for="">Description 2</label>
                   <input type="text" v-model="contact.section_2_description" class="form-control">
               </div>
               <button type="submit" class="btn btn-success mt-3">Simpan</button>
           </form>
        </div>
    </div>
</template>

<script>
export default {
    data(){
        return {
            contact: {
                section_1_header:'',
                section_1_description:'',
                section_1_title:'',
                secton_1_image:'',
                section_2_title:'',
                section_2_description:'',
            }
        }
    },
    methods:{
        image1(event){
            this.contact.section_1_image = event.target.files[0];
        },
        UpdateContact(){
            let uri = '/api/admin/layout/contact/edit';
            let formData = new FormData();
            formData.append("section_1_header", this.contact.section_1_header);
            formData.append("section_1_title", this.contact.section_1_title);
            formData.append("section_1_description", this.contact.section_1_description);
            formData.append("section_1_image", this.contact.section_1_image);
            formData.append("section_2_title", this.contact.section_2_title);
            formData.append("section_2_description", this.contact.section_2_description);

            this.axios.post(uri, formData).then((response) => {
                this.$swal.fire("Berhasil");
                this.$forceUpdate();
            })
        }
    }
}
</script>