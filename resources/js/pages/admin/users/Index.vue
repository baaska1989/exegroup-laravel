

<script>
import Edit from "../users/Edit.vue";
import ChangePassword from "../users/PasswordChange.vue";
import Swal from "sweetalert2";
export default {
    name: "Users",
    components: { Edit, ChangePassword },
    data() {
        return {
            shop: {
                id: "",
                name: "",
                prefix: "",
                shop_address: ""
            },
            shops: [],
            search: "",
            user: null,
            users: [],
            password: "",
            first_name: "",
            last_name: "",
            email: "",
            passwordVerify: "",
            alert: "",
            // role: "",
        };
    },

    created() {

        this.getUsers();
        this.getShops();
    },

    methods: {
        clearShop()
        {
            this.shop.name = "",
            this.shop.id = "",
            this.shop.prefix = "",
            this.shop.shop_address =""
        },
        searchUser() {
            axios
                .post("/api/search", { search: this.search })
                .then(({ data }) => {
                    this.users = data.data;
                });
        },
        getUsers() {
            axios.get("/api/users").then(({ data }) => {
                if (data.status) {
                    this.users = data.data;
                }
            });
        },

        getShops() {
            axios.get("/api/shops").then(({ data }) => {
                this.shops = data.data;
            });
        },

        addShop() {
            axios
                .post("/api/saveShop", { shop: this.shop })
                .then(({ data }) => {
                    if (data.status) {
                        this.$toast.success("Амжилттай хадгаллаа", {
                            position: "top-right",
                            timeout: 5000,
                            closeOnClick: true,
                            pauseOnFocusLoss: true,
                            pauseOnHover: true,
                            draggable: true,
                            draggablePercent: 0.6,
                            showCloseButtonOnHover: false,
                            hideProgressBar: true,
                            closeButton: "button",
                            icon: true,
                            rtl: false,
                        });
                        this.getShops();
                        this.shop.name = "";
                        this.shop.prefix = "";
                    } else {
                        this.$toast.error(data.message, {
                            position: "top-right",
                            timeout: 5000,
                            closeOnClick: true,
                            pauseOnFocusLoss: true,
                            pauseOnHover: true,
                            draggable: true,
                            draggablePercent: 0.6,
                            showCloseButtonOnHover: false,
                            hideProgressBar: true,
                            closeButton: "button",
                            icon: true,
                            rtl: false,
                        });
                    }
                });
        },

        addUser() {
            this.$modal.show("password-modal");
        },

        createUser() {
            axios
                .post("/api/saveUser", {
                    first_name: this.first_name,
                    last_name: this.last_name,
                    email: this.email,
                    password: this.password,
                })
                .then(({ data }) => {
                    this.$toast.success("Амжилттай нэмэгдлээ", {
                        position: "top-right",
                        timeout: 5000,
                        closeOnClick: true,
                        pauseOnFocusLoss: true,
                        pauseOnHover: true,
                        draggable: true,
                        draggablePercent: 0.6,
                        showCloseButtonOnHover: false,
                        hideProgressBar: true,
                        closeButton: "button",
                        icon: true,
                        rtl: false,
                    });
                    this.getUsers();
                    this.password = "";
                    this.$modal.hide("password-modal");
                });
        },
        // roleCheck(){
        //     axios.get("/api/users").then(({ data }) => {
        //         if (this.role === 'admin') {
        //             return true;
        //         }else{
        //             return false;
        //         }
        //     });
        // },
        editUser() {
            axios
                .post("/api/saveUser", {
                    username: this.username,
                    email: this.email,
                    password: this.password,
                })
                .then(({ data }) => {
                    this.$toast.success("Амжилттай нэмэгдлээ", {
                        position: "top-right",
                        timeout: 5000,
                        closeOnClick: true,
                        pauseOnFocusLoss: true,
                        pauseOnHover: true,
                        draggable: true,
                        draggablePercent: 0.6,
                        showCloseButtonOnHover: false,
                        hideProgressBar: true,
                        closeButton: "button",
                        icon: true,
                        rtl: false,
                    });
                    this.getUsers();
                    this.password = "";
                    this.$modal.hide("password-modal");
                });
        },
        updateShop() {
            axios
                .post("/api/updateShop", {
                    shop: this.shop,
                })
                .then(({ data }) => {
                    if (data.status) {
                        this.$toast.success("Амжилттай нэмэгдлээ",
                        {
                            position: "top-right",
                            timeout: 5000,
                            closeOnClick: true,
                            pauseOnFocusLoss: true,
                            pauseOnHover: true,
                            draggable: true,
                            draggablePercent: 0.6,
                            showCloseButtonOnHover: false,
                            hideProgressBar: true,
                            closeButton: "button",
                            icon: true,
                            rtl: false,
                        });
                        this.getShops();
                    } else {
                        this.$toast.error(data.message, {
                            position: "top-right",
                            timeout: 5000,
                            closeOnClick: true,
                            pauseOnFocusLoss: true,
                            pauseOnHover: true,
                            draggable: true,
                            draggablePercent: 0.6,
                            showCloseButtonOnHover: false,
                            hideProgressBar: true,
                            closeButton: "button",
                            icon: true,
                            rtl: false,
                        });
                    }
                });
        },
        changePassword(id) {
            axios
                .post("/api/saveUser", {
                    password: this.password,
                })
                .then(({ data }) => {
                    if (condition) {
                        this.$toast.success("Нууц үг амжилттай шинэчлэгдлээ", {
                            position: "top-right",
                            timeout: 5000,
                            closeOnClick: true,
                            pauseOnFocusLoss: true,
                            pauseOnHover: true,
                            draggable: true,
                            draggablePercent: 0.6,
                            showCloseButtonOnHover: false,
                            hideProgressBar: true,
                            closeButton: "button",
                            icon: true,
                            rtl: false,
                        });
                        this.getUsers();
                        this.password = "";
                        this.$modal.hide("change-modal");
                    }
                });
        },
        // changePassword(id) {
        //     axios
        //         .post("/api/ChangePassword/" + id, { password: this.password })
        //         .then(({ data }) => {
        //             if (data.status == true) {
        //                 this.$toast.success("Амжилттай шинэчиллээ", {
        //                     position: "top-right",
        //                     timeout: 5000,
        //                     closeOnClick: true,
        //                     pauseOnFocusLoss: true,
        //                     pauseOnHover: true,
        //                     draggable: true,
        //                     draggablePercent: 0.6,
        //                     showCloseButtonOnHover: false,
        //                     hideProgressBar: true,
        //                     closeButton: "button",
        //                     icon: true,
        //                     rtl: false,
        //                 });
        //                 this.getUsers();
        //                 this.password = "";
        //             } else {
        //                 this.$toast.error();
        //                 "Алдаа гарлаа",
        //                     {
        //                         position: "top-right",
        //                         timeout: 5000,
        //                         closeOnClick: true,
        //                         pauseOnFocusLoss: true,
        //                         pauseOnHover: true,
        //                         draggable: true,
        //                         draggablePercent: 0.6,
        //                         showCloseButtonOnHover: false,
        //                         hideProgressBar: true,
        //                         closeButton: "button",
        //                         icon: true,
        //                         rtl: false,
        //                     };
        //                 this.getUsers();
        //                 this.password = "";
        //             }
        //         });
        // },
        deleteUser(id) {
            Swal.fire({
                title: "Та устгахдаа итгэлтэй байна уу?",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                cancelButtonText: "Үгүй",
                confirmButtonText: "Тийм, устгах!",
            }).then((result) => {
                if (result.isConfirmed) {
                    axios
                        .post("/api/deleteUser/" + id)
                        .then(({ data }) => {
                            if (data.status == true) {
                                this.$toast.success(data.message, {
                                    position: "top-right",
                                    duration: 5000,
                                });
                                this.getUsers();
                            } else {
                                this.$toast.error(data.message);
                            }
                        })
                        .catch(function (error) {
                            if (error.response) {
                                if (error.response.status == 404) {
                                    alert(error.response.data.message);
                                }
                            }
                        });
                }
            });
        },
        deleteShop(id) {
            Swal.fire({
                title: "Та устгахдаа итгэлтэй байна уу?",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                cancelButtonText: "Үгүй",
                confirmButtonText: "Тийм, устгах!",
            }).then((result) => {
                if (result.isConfirmed) {
                    axios
                        .post("/api/deleteShop/" + id)
                        .then(({ data }) => {
                            if (data.status == true) {
                                this.$toast.success(data.message, {
                                    position: "top-right",
                                    duration: 5000,
                                });
                                this.getShops();
                            } else {
                                this.$toast.error(data.message);
                            }
                        })
                        .catch(function (error) {
                            if (error.response) {
                                if (error.response.status == 404) {
                                    alert(error.response.data.message);
                                }
                            }
                        });
                }
            });
        },
        PasswordModal(id) {
            // this.$modal.show("newClient");
            this.$modal.show("password-modal");
        },
        ChangePasswordModal(id) {
            axios.get("/api/getUser/" + id).then(({ data }) => {
                if (data.status) {
                    this.user = data.data;
                    this.$modal.show("change-modal");
                } else {
                    alert("Aldaa garlaa");
                }
            });
        },

        EditUserModal(id) {
            axios.get("/api/getUser/" + id).then(({ data }) => {
                if (data.status) {
                    this.user = data.data;
                    this.$modal.show("edit-modal");
                } else {
                    alert("Aldaa garlaa");
                }
            });
        },

        EditShopModal(id) {
            axios.get("/api/getShop/" + id).then(({ data }) => {
                if (data.status) {
                    this.shop.name = data.data.name;
                    this.shop.prefix = data.data.prefix;
                    this.shop.id = data.data.id;
                    this.shop.shop_address = data.data.shop_address;
                } else {
                    alert("Aldaa garlaa");
                }
            });
        },
        DeleteUserModal(id) {},
    },
};
</script>

<style scoped></style>
