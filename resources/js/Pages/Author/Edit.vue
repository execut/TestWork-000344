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
            <div class="row">
                <div class="col-md-6">
                    <form @submit.prevent="updateAuthor">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" class="form-control" v-model="author.name">
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </app-layout>
</template>

<script>
import AppLayout from '@/Layouts/AppLayout'
import JetSectionBorder from '@/Jetstream/SectionBorder'
import JetNavLink from '@/Jetstream/NavLink'

    export default {
        components: {
            AppLayout,
            JetSectionBorder,
            JetNavLink,
        },
        data() {
            return {
                author: {}
            }
        },
        created() {
            axios
                .get(`/api/authors/${route().params.id}`)
                .then((res) => {
                    this.author = res.data;
                });
        },
        methods: {
            updateAuthor() {
                axios
                    .patch(`/api/authors/${route().params.id}`, this.author)
                    .then((res) => {
                        location.href = route('author.list')
                    });
            }
        }
    }
</script>
