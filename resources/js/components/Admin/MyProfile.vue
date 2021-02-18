<template>
    <div class="card">
        <div class="card-header">
            My Profile
        </div>
        <img :src="'/uploads/uploads/'+ users.image" alt="" class="card-img-top">
        <div class="card-body">
            <h5 class="card-title">{{ users.user.name }}</h5>
            <h6 class="card-subtitle mb-2 text-muted">{{ users.short_name }}</h6>
            <p class="card-text">{{ users.address }}</p>
            <p class="card-text">{{ users.email }}</p>
            <p class="card-text">{{ users.phone_number }}</p>
            <p class="card-text">{{ users.birth_date }}</p>
            <p class="card-text">Link Facebook <a :href="users.facebook_link" class="card-link">Klik</a></p>
            <p class="card-text">Link Instagram <a :href="users.instagram_link" class="card-link">Klik</a></p>
            <p class="card-text">Link Github <a :href="users.github_link" class="card-link">Klik</a></p>
            <p class="card-text">Link Cadangan <a :href="users.another_link" class="card-link">Klik</a></p>
            <p class="card-text">Link Whatsapp <a :href="users.whatsapp_link" class="card-link">Klik</a></p>
            <p class="card-text">Link Freelancer <a :href="users.freelancer_link" class="card-link">Klik</a></p>
        </div>

        <div class="card-body">
            <div class="card-text">Edit</div>
            <form @submit.prevent="ProfileUpdate">
                <div class="form-group">
                    <label for="">Image</label>
                    <input type="file" class="form-control" @change="imageFile">
                    <img v-if="users.image" :src="'/uploads/uploads/' + users.image" alt="" class="img-thumbnail">
                    <img v-if="url" :src="url" alt="" class="img-thumbnail">
                </div>
                <div class="form-group">
                    <label for="">Nama</label>
                    <input type="text" class="form-control" v-model="form.name">
                </div>
                <div class="form-group">
                    <label for="">Nama Pendek</label>
                    <input type="text" class="form-control" v-model="form.short_name">
                </div>
                <div class="form-group">
                    <label for="">Alamat</label>
                    <input type="text" class="form-control" v-model="form.address">
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="text" class="form-control" v-model="form.email">
                </div>
                <div class="form-group">
                    <label for="">Nomor Telepon</label>
                    <input type="text" class="form-control" v-model="form.phone_number">
                </div>
                <div class="form-group">
                    <label for="">Tanggal Lahir</label>
                    <input type="text" class="form-control" v-model="form.birth_date">
                </div>
                <div class="form-group">
                    <label for="">Facebook</label>
                    <input type="text" class="form-control" v-model="form.facebook_link">
                </div>
                <div class="form-group">
                    <label for="">Instagram</label>
                    <input type="text" class="form-control" v-model="form.instagram_link">
                </div>
                <div class="form-group">
                    <label for="">Github</label>
                    <input type="text" class="form-control" v-model="form.github_link">
                </div>
                <div class="form-group">
                    <label for="">Whatsapp</label>
                    <input type="text" class="form-control" v-model="form.whatsapp_link">
                </div>
                <div class="form-group">
                    <label for="">Freelancer</label>
                    <input type="text" class="form-control" v-model="form.freelancer_link">
                </div>
                <div class="form-group">
                    <label for="">Link Cadangan</label>
                    <input type="text" class="form-control" v-model="form.another_link">
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
            users:{},
            form:{
                name:'',
                short_name:'',
                address:'',
                email:'',
                phone_number:'',
                birth_date:'',
                facebook_link:'',
                instagram_link:'',
                github_link:'',
                whatsapp_link:'',
                another_link:'',
                freelancer_link:'',
            },
            newImage:'',
            url:'',
        }
    },
    created(){
        let uri = `/api/profile`;
        this.axios.get(uri).then((response) => {
            this.users = response.data;
        });
    },
    methods: {
        imageFile(e){
            let file = e.target.files[0];
            this.newImage = e.target.files[0];
            this.url = URL.createObjectURL(file);
        },
        ProfileUpdate(){
            let uri = `/api/profile/edit`;
            let formData = new FormData();
            formData.append("name", this.form.name);
            formData.append("short_name", this.form.short_name);
            formData.append("email", this.form.email);
            formData.append("phone_number", this.form.phone_number);
            formData.append("address", this.form.address);
            formData.append("birth_date", this.form.birth_date);
            formData.append("facebook_link", this.form.facebook_link);
            formData.append("instagram_link", this.form.instagram_link);
            formData.append("freelancer_link", this.form.freelancer_link);
            formData.append("github_link", this.form.github_link);
            formData.append("another_link", this.form.another_link);
            formData.append("whatsapp_link", this.form.whatsapp_link);
            formData.append("image", this.newImage);

            this.axios.post(uri, formData).then((response) => {
                location.reload();
                this.$swal.fire("Berhasil");
            })
        }
    }
}
</script>