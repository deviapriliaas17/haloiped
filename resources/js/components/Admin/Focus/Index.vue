<template>
    <div class="card">
        <div class="card-header">Focus</div>
        <div class="card-body">
            <router-link class="btn btn-success" :to="{ name: 'admin-focus-create'}">Menambahkan</router-link>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Description</th>
                        <th>Icon</th>
                        <th>Action</th>
                    </thead>
                    <tbody v-for="(focus, index) in focuses" :key="focus.key">
                        <td>{{ index + 1}}</td>
                        <td>{{ focus.name }}</td>
                        <td>{{ focus.description }}</td>
                        <td>{{ focus.icon }}</td>
                        <td><router-link class="btn btn-info" :to="{ name:'admin-focus-edit', params: { 'id': focus.key}}">Edit</router-link></td>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data(){
        return {
            focuses: []
        }
    },
    created(){
        let uri = `/api/admin/focus`;
        this.axios.get(uri).then((response) => {
            this.focuses = response.data.focuses
        });
    }
}
</script>