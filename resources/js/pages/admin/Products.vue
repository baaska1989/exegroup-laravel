<template>
    <div>asdsad as</div>
</template>

<script>
export default {
    data() {
        loading: false;
    },
    created() {
        this.getProducts();
    },
    methods: {
        getProducts() {
            this.loading = true;
            axios
                .get("/api/getProducts")
                .then(({ data }) => {
                    if (data.status) {
                        this.products = data.data;
                        this.loading = false;
                    }
                })
                .finally(() => {
                    this.loading = false;
                });
        },
    },
    computed: {
        ...mapGetters([
            'user',
            'isLoggedIn'
        ])
    },

    mounted() {
        document.title = "Breathrise - Мэдээ мэдээлэл";
    }
};
</script>
