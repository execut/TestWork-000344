<template>
    <div>
        <h3 class="text-center">Edit Author</h3>
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
</template>

<script>
    export default {
        data() {
            return {
                author: {}
            }
        },
        created() {
            this.axios
                .get(`/api/authors/${this.$route.params.id}`)
                .then((res) => {
                    this.author = res.data;
                });
        },
        methods: {
            updateAuthor() {
                this.axios
                    .patch(`/api/authors/${this.$route.params.id}`, this.author)
                    .then((res) => {
                        this.$router.push({ name: 'home' });
                    });
            }
        }
    }
</script>
