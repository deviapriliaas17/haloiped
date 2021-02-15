<template>
    <div class="card">
        <div class="card-header">
            Portfolio
        </div>
        <div class="card-body">
            <router-link :to="{ name:'admin-portfolio-create'}" class="btn btn-success">Menambahkan</router-link>
            <table class="table table-responsive">
                <thead>
                    <th>No</th>
                    <th>Nama Portfolio</th>
                    <th>Action</th>
                </thead>
                <tbody v-for="(portfolio,index) in portfolios" :key="portfolio.id">
                    <td>{{ index+1 }}</td>
                    <td>{{ portfolio.name }}</td>
                    <td>
                        <router-link class="btn btn-sm btn-info" :to="{ name : 'admin-portfolio-edit', params:{'id':portfolio.id}}"></router-link>
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
            portfolios :{}
        }
    }, 
    created(){
        let uri = `/api/admin/portfolio`;
        this.axios.get(uri).then((response) => {
            this.portfolios = response.data
        });
    }
}
</script>