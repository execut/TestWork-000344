<template>
    <div>
        <h2 class="text-center">Authors List</h2>

        <table class="table">
            <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Detail</th>
                <!-- <th>Actions</th> -->
            </tr>
            </thead>
            <tbody>
            <tr v-for="author in authors" :key="author.id">
                <td>{{ author.id }}</td>
                <td>{{ author.name }}</td>
                <td>
                    <div class="btn-group" role="group">
                        <router-link :to="{name: 'edit', params: { id: author.id }}" class="btn btn-success">Edit</router-link>
                        <button class="btn btn-danger" @click="deleteAuthor(author.id)">Delete</button>
                    </div>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                authors: []
            }
        },
        created() {
            this.axios
                .get('/api/authors/')
                .then(response => {
                    this.authors = response.data;
                });
        },
        methods: {
            deleteAuthor(id) {
                this.axios
                    .delete(`/api/authors/${id}`)
                    .then(response => {
                        let i = this.authors.map(data => data.id).indexOf(id);
                        this.authors.splice(i, 1)
                    });
            }
        }
    }
</script>
