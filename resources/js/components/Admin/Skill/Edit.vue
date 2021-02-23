<template>
    <div class="card">
        <div class="card-header">Menambahkan Skill</div>
        <div class="card-body">
            <form @submit.prevent="StoreData">
                <div class="form-group">
                    <label for="">Nama Skill</label>
                    <input type="text" v-model="skill.name" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Deskripsi Skill</label>
                    <input type="text" v-model="skill.description" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Rate</label>
                    <input type="number" class="form-control" v-model="skill.rate">
                </div>
                <div class="form-group">
                    <label for="">Image</label>
                    <input type="file" class="form-control" @change="ChangeImage">
                    <img  :src="'/uploads/uploads/' + skill.image" alt="" class="img-thumbnail mt-2 mb-2">
                    <p>Upload Terbaru</p>
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
            skill : {},
            url:'',
            newImage:''
        };
    },
    created(){
        let uri = '/api/admin/skill/' + this.$route.params.id;
        this.axios.get(uri).then((response) => {
            this.skill = response.data.skill;
        });
    },
    methods : {
        ChangeImage(e){
            let file = e.target.files[0];
            this.url = URL.createObjectURL(file);
            this.newImage = file;
        },
        StoreData(){
            let uri = '/api/admin/skill/edit/' + this.$route.params.id;
            let formData = new FormData();
            formData.append("name", this.skill.name);
            formData.append("description", this.skill.description);
            formData.append("rate",this.skill.rate);
            formData.append("image", this.newImage);

            this.axios.post(uri, formData).then((response) => {
                this.$swal.fire("Berhasil");
            });
        }
    }
}
</script>