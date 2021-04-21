<template>
    <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Authors List
            </h2>
        </template>
        <nav class="navbar navbar-expand-lg navbar-light bg-light show">
            <div class="collapse navbar-collapse show">
                <div class="navbar-nav">
                    <jet-nav-link :href="route('author.list')" :active="route().current('author.list')">
                        List
                    </jet-nav-link>
                    <jet-nav-link :href="route('author.create')" :active="route().current('author.create')">
                        Create
                    </jet-nav-link>
                </div>
            </div>
        </nav>

        <div class="container">
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
                            <a :href="route('author.edit', {id: author.id})" class="btn btn-success">Edit</a>
                            <button class="btn btn-danger" @click="deleteAuthor(author.id)">Delete</button>
                        </div>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </app-layout>
</template>

<script>
import AppLayout from '@/Layouts/AppLayout'
import JetSectionBorder from '@/Jetstream/SectionBorder'
import JetNavLink from '@/Jetstream/NavLink'

export default {
    props: ['sessions'],

    components: {
        AppLayout,
        JetSectionBorder,
        JetNavLink,
    },
    data() {
        return {
            authors: []
        }
    },
    created() {
        axios
            .get('/api/authors/')
            .then(response => {
                this.authors = response.data;
            });
    },
    methods: {
        deleteAuthor(id) {
            axios
                .delete(`/api/authors/${id}`)
                .then(response => {
                    let i = this.authors.map(data => data.id).indexOf(id);
                    this.authors.splice(i, 1)
                });
        }
    }
}
</script>
