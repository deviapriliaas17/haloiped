<template>
    <div class="card">
        <div class="card-header">
            Daftar Template
        </div>
        <div class="card-body">
            <router-link class="btn btn-success" :to="{ name:'admin-template-create'}">Menambahkan</router-link>
            <table class="table">
                <thead>
                    <th>No</th>
                    <th>Nama Template</th>
                    <th>Action</th>
                </thead>
                <tbody v-for="(template, index) in templates" :key="template.key">
                    <td>{{ index + 1}}</td>
                    <td>{{ template.name }}</td>
                    <td>
                        <router-link class="btn btn-info" :to="{ name:'admin-template-edit', params:{'id':template.key}}">Edit</router-link>
                    </td>
                </tbody>
            </table>
        </div>
    </div>
</template>

<script>
export default {
    data(){
        return {
            templates:{}
        }
    },
    created() {
        let uri = `/api/admin/template`;
        this.axios.get(uri).then((response) => {
            this.templates = response.data.templates;
        });
    }
}
</script>