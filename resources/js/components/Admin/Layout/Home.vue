<template>
    <div class="card">
        <div class="card-header">
            Layout Home
        </div>
        <div class="card-body">
            <form @submit.prevent="Home">
                <div class="form-group">
                    <label for="">Description</label>
                    <input type="text" v-model="datas.description" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Keyphrase</label>
                    <input type="text" v-model="datas.keyphrase" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Title</label>
                    <input type="text" v-model="datas.title" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Section Title</label>
                    <input type="text" class="form-control" v-model="datas.section_1_title">
                </div>
                <div class="form-group">
                    <label for="">Section Header</label>
                    <input type="text" v-model="datas.section_1_header" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Section 1 Image</label>
                    <input type="file" @change="ChangeImage1" class="form-control">
                    <img :src="'/uploads/uploads/' + datas.section_1_image" alt="" class="img-thumbnail">
                    <p v-if="url1" class="mt-2">Upload Terbaru</p>
                    <img v-if="url1" :src="url1" alt="" class="img-thumbnail mt-2">
                </div>
                <div class="form-group">
                    <label for="">Section Button 1 </label>
                    <input type="text" v-model="datas.section_1_button_1" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Section Link Button 1</label>
                    <input type="text" v-model="datas.section_1_link_1" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Section Button 2</label>
                    <input type="text" class="form-control" v-model="datas.section_1_button_2">
                </div>
                <div class="form-group">
                    <label for="">Section Link 2</label>
                    <input type="text" class="form-control" v-model="datas.section_1_link_2">
                </div>
                <div class="form-group">
                    <label for="">Show Section 1</label>
                    <select name="" class="form-control" id="" v-model="datas.section_1_show">
                        <option value="1">Show</option>
                        <option value="0">Hide</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Section 2 Title</label>
                    <input type="text" v-model="datas.section_2_title" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Section 2 Header</label>
                    <input type="text" v-model="datas.section_2_header" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Section 2 Small Title</label>
                    <input type="text" v-model="datas.section_2_small_title" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Section 2 Image</label>
                    <input type="file" @change="ChangeImage2" class="form-control">
                    <img :src="'/uploads/uploads/' + datas.section_2_image" alt="" class="img-thumbnail">
                    <p v-if="url2" class="mt-2">Upload Terbaru</p>
                    <img v-if="url2" :src="url2" alt="" class="img-thumbnail mt-2">
                </div>
                <div class="form-group">
                    <label for="">Show Section 2</label>
                    <select name="" class="form-control" id="" v-model="datas.section_2_show">
                        <option value="1">Show</option>
                        <option value="0">Hide</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Section 3 Title</label>
                    <input type="text" v-model="datas.section_3_title" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Section 3 Header</label>
                    <input type="text" v-model="datas.section_3_header" class="form-control">
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="">Section 3 Text 1</label>
                            <input type="text" v-model="datas.section_3_text_1" class="form-control">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="">Section 3 Number 1</label>
                            <input type="text" v-model="datas.section_3_number_1" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="">Section 3 Text 2</label>
                            <input type="text" v-model="datas.section_3_text_2" class="form-control">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="">Section 3 Number 2</label>
                            <input type="text" v-model="datas.section_3_number_2" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="">Section 3 Text 3</label>
                            <input type="text" v-model="datas.section_3_text_3" class="form-control">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="">Section 3 Number 3</label>
                            <input type="text" v-model="datas.section_3_number_3" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="">Section 3 Text 4</label>
                            <input type="text" v-model="datas.section_3_text_4" class="form-control">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="">Section 3 Number 4</label>
                            <input type="text" v-model="datas.section_3_number_4" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="">Show Section 3</label>
                    <select name="" class="form-control" id="" v-model="datas.section_3_show">
                        <option value="1">Show</option>
                        <option value="0">Hide</option>
                    </select>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="">Section 4 Title</label>
                            <input type="text" v-model="datas.section_4_title" class="form-control">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="">Section 4 Header</label>
                            <input type="text" v-model="datas.section_4_header" class="form-control">
                        </div>
                    </div>
                </div>
                 <div class="form-group">
                    <label for="">Show Section 4</label>
                    <select name="" class="form-control" id="" v-model="datas.section_4_show">
                        <option value="1">Show</option>
                        <option value="0">Hide</option>
                    </select>
                </div>
                <div class="row">
                    <div class="col-4">
                        <div class="form-group">
                            <label for="">Section 5 Title</label>
                            <input type="text" v-model="datas.section_5_title" class="form-control">
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <label for="">Section 5 Header</label>
                            <input type="text" v-model="datas.section_5_header" class="form-control">
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <label for="">Section 5 Image</label>
                            <input type="file" @change="ChangeImage5" class="form-control">
                            <img :src="'/uploads/uploads/' + datas.section_5_image" alt="" class="img-thumbnail">
                            <p v-if="url5" class="mt-2">Upload Terbaru</p>
                            <img v-if="url5" :src="url5" alt="" class="img-thumbnail mt-2">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="">Show Section 5</label>
                    <select name="" class="form-control" id="" v-model="datas.section_5_show">
                        <option value="1">Show</option>
                        <option value="0">Hide</option>
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
            datas:{
                description:'',
                keyphrase:'',
                title:'',
                section_1_title:'',
                section_1_header:'',
                section_1_image:'',
                section_1_button_1:'',
                section_1_link_1:'',
                section_1_button_2:'',
                section_1_link_2:'',
                section_2_title:'',
                section_2_header:'',
                section_2_small_title:'',
                section_2_image:'',
                section_3_title:'',
                section_3_header:'',
                section_3_text_1:'',
                section_3_number_1:'',
                section_3_text_2:'',
                section_3_number_2:'',
                section_3_text_3:'',
                section_3_number_3:'',
                section_3_text_4:'',
                section_3_number_4:'',
                section_4_title:'',
                section_4_header:'',
                section_5_title:'',
                section_5_header:'',
                section_5_image:'',
                section_1_show:'',
                section_2_show:'',
                section_3_show:'',
                section_4_show:'',
                section_5_show:''
            },
            newImage1:'',
            newImage2:'',
            newImage5:'',
            url1:'',
            url2:'',
            url5:'',
        }
    },
    created(){
        let uri = `/api/admin/layout/home`;
        this.axios.get(uri).then((response) => {
            this.datas = response.data;
        });
    },
    methods:{
        Home(){
            let uri = `/api/admin/layout/home/edit`;
            let formData = new FormData();
                formData.append("description",this.datas.description);
                formData.append("keyphrase",this.datas.keyphrase);
                formData.append("title",this.datas.title);
                formData.append("section_1_title",this.datas.section_1_title);
                formData.append("section_1_header",this.datas.section_1_header);
                formData.append("section_1_image",this.newImage1);
                formData.append("section_1_button_1",this.datas.section_1_button_1);
                formData.append("section_1_link_1",this.datas.section_1_link_1);
                formData.append("section_1_button_2",this.datas.section_1_button_2);
                formData.append("section_1_link_2",this.datas.section_1_link_2);
                formData.append("section_2_title",this.datas.section_2_title);
                formData.append("section_2_header",this.datas.section_2_header);
                formData.append("section_2_small_title",this.datas.section_2_small_title);
                formData.append("section_2_image",this.newImage2);
                formData.append("section_3_title",this.datas.section_3_title);
                formData.append("section_3_header",this.datas.section_3_header);
                formData.append("section_3_text_1",this.datas.section_3_text_1);
                formData.append("section_3_number_1",this.datas.section_3_number_1);
                formData.append("section_3_text_2",this.datas.section_3_text_2);
                formData.append("section_3_number_2",this.datas.section_3_number_2);
                formData.append("section_3_text_3",this.datas.section_3_text_3);
                formData.append("section_3_number_3",this.datas.section_3_number_3);
                formData.append("section_3_text_4",this.datas.section_3_text_4);
                formData.append("section_3_number_4",this.datas.section_3_number_4);
                formData.append("section_4_title",this.datas.section_4_title);
                formData.append("section_4_header",this.datas.section_4_header);
                formData.append("section_5_title",this.datas.section_5_title);
                formData.append("section_5_header",this.datas.section_5_header);
                formData.append("section_5_image",this.newImage5);
                formData.append("section_1_show",this.datas.section_1_show);
                formData.append("section_2_show",this.datas.section_2_show);
                formData.append("section_3_show",this.datas.section_3_show);
                formData.append("section_4_show",this.datas.section_4_show);
                formData.append("section_5_show",this.datas.section_5_show);
            this.axios.post(uri,formData).then((response) =>{
                this.$swal.fire("Berhasil")
                // location.reload();
            })
        },
        ChangeImage1(e){
            let file = e.target.files[0];
            this.url1 = URL.createObjectURL(file);
            this.newImage1= file;
        },
        ChangeImage2(e){
            let file = e.target.files[0];
            this.url2 = URL.createObjectURL(file);
            this.newImage2= file;
        },
        ChangeImage5(e){
            let file = e.target.files[0];
            this.url5 = URL.createObjectURL(file);
            this.newImage5= file;
        },
        
    }
}
</script>