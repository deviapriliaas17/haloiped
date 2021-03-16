<template>
    <div class="card">
        <div class="card-header">
            About Page
        </div>
        <div class="card-body">
            <form @submit.prevent="UpdateAbout">
                <div class="row">
                    <div class="col-4">
                        <div class="form-group">
                            <label for="">Keyphrase</label>
                            <input type="text" class="form-control" v-model="datas.keyphrase">
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <label for="">Description</label>
                            <input type="text" class="form-control" v-model="datas.description">
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <label for="">Title</label>
                            <input type="text" class="form-control" v-model="datas.title">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="">Header 1</label>
                            <input type="text" class="form-control" v-model="datas.section_1_header">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="">Title 1</label>
                            <input type="text" v-model="datas.section_1_title" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="">Description 1</label>
                            <input type="text" class="form-control" v-model="datas.section_1_description">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="">Image 1</label>
                            <input type="file" class="form-control" @change="image1">
                        </div>
                        <img :src="'/uploads/uploads/' + datas.section_1_image" alt="" class="img-thumbnail">
                        <p v-if="url1">Upload Terbaru</p>
                        <img :src="url1" alt="" class="img-thumbnail">
                    </div>
                </div>
                <div class="form-group">
                    <label for="">Show Section 1</label>
                    <select name="" id="" v-model="datas.section_1_show" class="form-control">
                        <option value="1" :selected="datas.section_1_show == 1">Show</option>
                        <option value="0" :selected="datas.section_1_show == 0">Hide</option>
                    </select>
                </div>
                <div class="row">
                    <div class="col-4">
                        <div class="form-group">
                            <label for="">Title 2 - 1</label>
                            <input type="text" class="form-control" v-model="datas.section_2_title_1">
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <label for="">Description 2 - 1</label>
                            <input type="text" class="form-control" v-model="datas.section_2_desc_1">
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <label for="">icon 2 - 1</label>
                            <input type="file" class="form-control" @change="icon1">
                            <img :src="'/uploads/uploads/' + datas.section_2_icon_1" alt="" class="img-thumbnail">
                            <p v-if="icon_1">Upload Terbaru</p>
                            <img :src="icon_1" alt="" class="img-thumbnail">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4">
                        <div class="form-group">
                            <label for="">Title 2 - 2</label>
                            <input type="text" class="form-control" v-model="datas.section_2_title_2">
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <label for="">Description 2 - 2</label>
                            <input type="text" class="form-control" v-model="datas.section_2_desc_2">
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <label for="">icon 2 - 2</label>
                            <input type="file" class="form-control" @change="icon2">
                            <img :src="'/uploads/uploads/' + datas.section_2_icon_2" alt="" class="img-thumbnail">
                            <p v-if="icon_2">Upload Terbaru</p>
                            <img :src="icon_2" alt="" class="img-thumbnail">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4">
                        <div class="form-group">
                            <label for="">Title 2 - 3</label>
                            <input type="text" class="form-control" v-model="datas.section_2_title_3">
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <label for="">Description 2 - 3</label>
                            <input type="text" class="form-control" v-model="datas.section_2_desc_3">
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <label for="">icon 2 - 3</label>
                            <input type="file" class="form-control" @change="icon3">
                            <img :src="'/uploads/uploads/' + datas.section_2_icon_3" alt="" class="img-thumbnail">
                            <p v-if="icon_3">Upload Terbaru</p>
                            <img :src="icon_3" alt="" class="img-thumbnail">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="">Show Section 2</label>
                    <select name="" id="" v-model="datas.section_2_show" class="form-control">
                        <option value="1" :selected="datas.section_2_show == 1">Show</option>
                        <option value="0" :selected="datas.section_2_show == 0">Hide</option>
                    </select>
                </div>
                <div class="row">
                    <div class="col-4">
                        <div class="form-group">
                            <label for="">Title 3</label>
                            <input type="text" class="form-control" v-model="datas.section_3_title">
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <label for="">Description 3</label>
                            <input type="text" class="form-control" v-model="datas.section_3_description">
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <label for="">Image 3</label>
                            <input type="file" class="form-control" @change="image3">
                            <img :src="'/uploads/uploads/' + datas.section_3_image" alt="" class="img-thumbnail">
                            <p v-if="url3">Upload Terbaru</p>
                            <img :src="url3" alt="" class="img-thumbnail">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="">Show Section 3</label>
                    <select name="" id="" v-model="datas.section_3_show" class="form-control">
                        <option value="1" :selected="datas.section_3_show == 1">Show</option>
                        <option value="0" :selected="datas.section_3_show == 0">Hide</option>
                    </select>
                </div>
                <button class="btn btn-success mt-3">Simpan</button>
            </form>
        </div>
    </div>
</template>

<script>
export default {
    data(){
        return{
            datas:{
                section_1_header:'',
                section_1_title:'',
                section_1_description:'',
                section_1_image:'',
                section_2_show:'',
                section_2_title_1:'',
                section_2_title_2:'',
                section_2_title_3:'',
                section_2_desc_1:'',
                section_2_desc_2:'',
                section_2_desc_3:'',
                section_2_icon_1:'',
                section_2_icon_2:'',
                section_2_icon_3:'',
                section_2_show:'',
                section_3_title:'',
                section_3_description:'',
                section_3_image:'',
                section_3_show:'',
                description:'',
                title:'',
                keyphrase:'',
            },
            url1:'',
            url3:'',
            icon_1:'',
            icon_2:'',
            icon_3:'',
            image_1:'',
            image_3:'',
            icon_image_1:'',
            icon_image_2:'',
            icon_image_3:''
        }
    },
    created(){
        let uri = `/api/admin/layout/about`;
        this.axios.get(uri).then((response) => {
            this.datas = response.data;
        });
    },
    methods:{
        image1 (event) { 
            let file = event.target.files[0];
            this.url1 = URL.createObjectURL(file);
            this.image_1 = file;
        },
        icon1(event){
            let file = event.target.files[0];
            this.icon_1 = URL.createObjectURL(file);
            this.icon_image_1 = file;
        },
        icon2(event){
            let file = event.target.files[0];
            this.icon_2 = URL.createObjectURL(file);
            this.icon_image_2 = file;
        },
        icon3(event){
            let file = event.target.files[0];
            this.icon_3 = URL.createObjectURL(file);
            this.icon_image_3 = file;
        },
        image3(event){
            let file = event.target.files[0];
            this.url3 = URL.createObjectURL(file);
            this.image_3 = file;
        },
        UpdateAbout(){
            let uri = `/api/admin/layout/about/edit`;
            let sendData = new FormData();
            sendData.append("section_1_header", this.datas.section_1_header);
            sendData.append("section_1_title", this.datas.section_1_title);
            sendData.append("section_1_description", this.datas.section_1_description);
            sendData.append("section_1_image", this.image_1);
            sendData.append("section_2_title_1", this.datas.section_2_title_1);
            sendData.append("section_2_title_2", this.datas.section_2_title_2);
            sendData.append("section_2_title_3", this.datas.section_2_title_3);
            sendData.append("section_2_desc_1", this.datas.section_2_desc_1);
            sendData.append("section_2_desc_2", this.datas.section_2_desc_2);
            sendData.append("section_2_icon_1", this.icon_image_1);
            sendData.append("section_2_icon_2", this.icon_image_2);
            sendData.append("section_2_icon_3", this.icon_image_3);
            sendData.append("section_3_title", this.datas.section_3_title);
            sendData.append("section_3_description", this.datas.section_3_description);
            sendData.append("section_3_image", this.image_3);
            sendData.append("section_1_show", this.datas.section_1_show);
            sendData.append("section_2_show", this.datas.section_2_show);
            sendData.append("section_3_show", this.datas.section_3_show);
            sendData.append("description", this.datas.description);
            sendData.append("title", this.datas.title);
            sendData.append("keyphrase", this.datas.keyphrase);

            this.axios.post(uri, sendData).then((response) => {
                this.$swal.fire("Berhasil");
                this.$forceUpdate();
            })
        }
    }
}
</script>