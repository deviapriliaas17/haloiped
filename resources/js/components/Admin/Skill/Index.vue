<template>
    <div class="card">
        <div class="card-header">Daftar Skill</div>
        <div class="card-body">
            <router-link class="btn btn-success mb-2" :to="{ name : 'admin-skill-create'}">Tambahkan</router-link>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Deskripsi</th>
                        <th>Rate</th>
                        <th>Image</th>
                        <th>Action</th>
                    </thead>
                    <tbody v-for="(skill, index) in skills" :key="skill.id">
                        <td> {{ index + 1}} </td>
                        <td> {{ skill.name }}</td>
                        <td>{{ skill.description }}</td>
                        <td>{{ skill.rate }}</td>
                        <td> <img class="img-thumbnail" :src="'/uploads/uploads/' + skill.image " alt=""></td>
                        <td><router-link :to="{ name : 'admin-skill-edit', params: {'id' : skill.id}}" class="btn btn-info">Edit</router-link></td>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    data() {
        return {
            skills:{}
        }
    }, 
    created() {
        let uri = '/api/admin/skill';
        this.axios.get(uri).then((response) => {
            this.skills = response.data
        });
    }
}
</script>