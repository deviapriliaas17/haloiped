<template>
    <div class="card">
        <div class="card-header">Menambahkan Skill</div>
        <div class="card-body">
            <form @submit.prevent="StoreData">
                <div class="form-group">
                    <label for="">Nama Skill</label>
                    <input type="text" v-model="name" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Deskripsi Skill</label>
                    <input type="text" v-model="description" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Rate</label>
                    <input type="number" class="form-control" v-model="rate">
                </div>
                <div class="form-group">
                    <label for="">Image</label>
                    <input type="file" class="form-control" @change="ChangeImage">
                    <img v-if="url" :src="url" alt="" class="img-thumbnail mt-2 mb-2">
                </div>
                <button class="btn btn-success mt-3">Simpan</button>
            </form>
        </div>
    </div>
</template>

<script>
export default {
    data(){
        return {
            name:'',
            description:'',
            rate:'',
            image:'',
            url:'',
        };
    },
    methods : {
        ChangeImage(e){
            let file = e.target.files[0];
            this.url = URL.createObjectURL(file);
            this.image = file;
        },
        StoreData(){
            let uri = '/api/admin/skill/create';
            let formData = new FormData();
            formData.append("name", this.name);
            formData.append("description", this.description);
            formData.append("rate",this.rate);
            formData.append("image", this.image);

            this.axios.post(uri, formData).then((response) => {
                this.$swal.fire("Berhasil");
            });
        }
    }
}
</script>