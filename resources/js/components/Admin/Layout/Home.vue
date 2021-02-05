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
                <button class="btn btn-success">Simpan</button>
            </form>
        </div>
    </div>
</template>

<script>
export default {
    data(){
        return{
            datas:{},
        }
    },
    methods:{
        Home(){
            let uri = `/api/admin/layout/home/edit`;
            this.axios.post(uri,this.datas).then((response) =>{
                this.$swal.fire("Berhasil")
                this.$router.push({name:'admin-layout-home'})
            })
        }
    }
}
</script>