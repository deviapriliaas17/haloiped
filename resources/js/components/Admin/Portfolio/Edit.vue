<template>
    <div class="card">
        <div class="card-header">Menambahkan Portfolio</div>
        <div class="card-body">
            <form @submit.prevent="StoreData">
                <div class="form-group">
                    <label for="">Nama Portfolio</label>
                    <input type="text" v-model="dataForm.name" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Image</label>
                    <input type="file" class="form-control" @change="imageChange">
                    <img :src="'/uploads/uploads/'+ dataForm.image " alt="" class="img-thumbnail">
                    <p v-if="url">Upload Terbaru</p>
                    <img v-if="url" :src="url" alt="" class="img-thumbnail">
                </div>
                <div class="form-group">
                    <label for="">Description</label>
                    <input type="text" name="description" class="form-control" v-model="dataForm.description">
                </div>
                <div class="form-group">
                    <label for="">Tanggal</label>
                    <input type="date" name="date" id="" class="form-control" v-model="dataForm.date">
                </div>
                <div class="form-group">
                    <label for="">Link</label>
                    <input type="text" name="link" id="" class="form-control" v-model="dataForm.link">
                </div>
                <button class="btn btn-success mb-2">Simpan</button>
            </form>
        </div>
    </div>
</template>

<script>
export default {
  data () {
        return {
            dataForm : {
                name : '',
                image : '',
                description:'',
                alt_image:'',
                date:'',
                link:'',
        },
        url:'',
        newiImage:'',
    }
  },
  created(){
      let uri = `/api/admin/portfolio/${this.$route.params.id}`;
      this.axios.get(uri).then((response) => {
          this.dataForm = response.data
      });
  },
    methods : {
        imageChange(event){
            const file = event.target.files[0];
            this.newImage = event.target.files[0];
            this.url = URL.createObjectURL(file);
        },
        StoreData(){
            let uri = `/api/admin/portfolio/edit/${this.$route.params.id}`;
            let formData = new FormData;
            formData.append("name", this.dataForm.name);
            formData.append("description", this.dataForm.description);
            formData.append("alt_image", this.dataForm.alt_image);
            formData.append("date", this.dataForm.date);
            formData.append("image", this.newImage);
            formData.append("link", this.dataForm.link);
            this.axios.post(uri, formData).then((response) => {
                this.$swal.fire("Berhasil");
                this.$router.push({name : 'admin-portfolio'});
            })

        }
    }
}
</script>