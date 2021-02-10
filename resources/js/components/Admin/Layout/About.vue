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
                    </div>
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
                        </div>
                    </div>
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
                        </div>
                    </div>
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
                section_2_title_1:'',
                section_2_title_2:'',
                section_2_title_3:'',
                section_2_desc_1:'',
                section_2_desc_2:'',
                section_2_desc_3:'',
                section_2_icon_1:'',
                section_2_icon_2:'',
                section_2_icon_3:'',
                section_3_title:'',
                section_3_description:'',
                section_3_image:'',
                description:'',
                title:'',
                keyphrase:'',
            },
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
                this.datas.section_1_image = event.target.files[0];
        },
        icon1(event){
            this.datas.section_2_icon_1 = event.target.files[0];
        },
        icon2(event){
            this.datas.section_2_icon_2 = event.target.files[0];
        },
        icon3(event){
            this.datas.section_2_icon_3 = event.target.files[0];
        },
        image3(event){
            this.datas.section_3_image = event.target.files[0];
        },
        UpdateAbout(){
            let uri = `/api/admin/layout/about/edit`;
            let sendData = new FormData();
            sendData.append("section_1_header", this.datas.section_1_header);
            sendData.append("section_1_title", this.datas.section_1_title);
            sendData.append("section_1_description", this.datas.section_1_description);
            sendData.append("section_1_image", this.datas.section_1_image);
            sendData.append("section_2_title_1", this.datas.section_2_title_1);
            sendData.append("section_2_title_2", this.datas.section_2_title_2);
            sendData.append("section_2_title_3", this.datas.section_2_title_3);
            sendData.append("section_2_desc_1", this.datas.section_2_desc_1);
            sendData.append("section_2_desc_2", this.datas.section_2_desc_2);
            sendData.append("section_2_icon_1", this.datas.section_2_icon_1);
            sendData.append("section_2_icon_2", this.datas.section_2_icon_2);
            sendData.append("section_2_icon_3", this.datas.section_2_icon_3);
            sendData.append("section_3_title", this.datas.section_3_title);
            sendData.append("section_3_description", this.datas.section_3_description);
            sendData.append("section_3_image", this.datas.section_3_image);
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