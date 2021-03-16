<template>
    <div class="card">
        <div class="card-header">
            Daftar Jenis Pekerjaan
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <th>No</th>
                    <th>Name</th>
                    <th>Deskripsi</th>
                    <th>Icon</th>
                    <th>Position</th>
                </thead>
                <tbody v-for="(type, index) in types" :key="type.id">
                    <td>{{ index + 1}}</td>
                    <td>{{ type.name }}</td>
                    <td>{{ type.description }}</td>
                    <td>{{ type.icon }}</td>
                    <td>{{ type.position }}</td>
                </tbody>
            </table>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            types:{}
        }
    },
    created(){
        let uri = `/api/admin/job-type`;
        this.axios.get(uri).then((response) => {
            this.types = response.data.types
        });
    }
}
</script>