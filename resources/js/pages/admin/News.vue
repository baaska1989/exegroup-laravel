<template>
    <div class="flex items-center mt-8 intro-y">
        <h2 class="mr-auto text-lg font-medium">Мэдээ мэдээлэл</h2>
    </div>
    <div class="p-5 mt-5 intro-y box">
        <Button @click="value = true" type="primary">Create</Button>
    </div>
    <Drawer
        title="Create"
        v-model="value"
        width="720"
        :mask-closable="false"
        :styles="styles"
    >
        <Form :model="formData">
            <Row :gutter="32">
                <Col span="12">
                    <FormItem label="Name" label-position="top">
                        <Input v-model="formData.name" placeholder="please enter user name" />
                    </FormItem>
                </Col>
                <Col span="12">
                    <FormItem label="Url" label-position="top">
                        <Input v-model="formData.url" placeholder="please enter url">
                            <template #prepend>http://</template>
                            <template #append>.com</template>
                        </Input>
                    </FormItem>
                </Col>
            </Row>
            <Row :gutter="32">
                <Col span="12">
                    <FormItem label="Owner" label-position="top">
                        <Select v-model="formData.owner" placeholder="please select an owner">
                            <Option value="jobs">Steven Paul Jobs</Option>
                            <Option value="ive">Sir Jonathan Paul Ive</Option>
                        </Select>
                    </FormItem>
                </Col>
                <Col span="12">
                    <FormItem label="Type" label-position="top">
                        <Select v-model="formData.type" placeholder="please choose the type">
                            <Option value="private">Private</Option>
                            <Option value="public">Public</Option>
                        </Select>
                    </FormItem>
                </Col>
            </Row>
            <Row :gutter="32">
                <Col span="12">
                    <FormItem label="Approver" label-position="top">
                        <Select v-model="formData.approver" placeholder="please choose the approver">
                            <Option value="jobs">Steven Paul Jobs</Option>
                            <Option value="ive">Sir Jonathan Paul Ive</Option>
                        </Select>
                    </FormItem>
                </Col>
                <Col span="12">
                    <FormItem label="DateTime" label-position="top">
                        <DatePicker v-model="formData.date" type="daterange" placeholder="please select the date" style="display: block" placement="bottom-end"></DatePicker>
                    </FormItem>
                </Col>
            </Row>
            <FormItem label="Description" label-position="top">
                <Input type="textarea" v-model="formData.desc" :rows="4" placeholder="please enter the description" />
            </FormItem>
        </Form>
        <div class="demo-drawer-footer">
            <Button style="margin-right: 8px" @click="value = false">Cancel</Button>
            <Button type="primary" @click="value = false">Submit</Button>
        </div>
    </Drawer>
</template>

<script>
import Edit from './users/Edit.vue';
import ChangePassword from './users/PasswordChange.vue'
export default {
    name: "News",
    components: { Edit, ChangePassword },
    data() {
        return {
            news: {
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
            value: false,
            styles: {
                height: 'calc(100% - 55px)',
                overflow: 'auto',
                paddingBottom: '53px',
                position: 'static'
            },
            formData: {
                name: '',
                url: '',
                owner: '',
                type: '',
                approver: '',
                date: '',
                desc: ''
            },
        };
    },

    created() {
        this.getUsers();
        this.getShops();
    },

    methods: {

        clearShop(){
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

            this.$modal.show("password-modal");
        },

        ChangePasswordModal(id) {
            axios.get("/api/getUser/" + id).then(({ data }) => {
                if (data.status) {
                    this.user = data.data;
                    this.$modal.show("change-modal");
                } else {
                    alert("Алдаа гарлаа");
                }
            });
        },

        EditUserModal(id) {
            axios.get("/api/getUser/" + id).then(({ data }) => {
                if (data.status) {
                    this.user = data.data;
                    this.$modal.show("edit-modal");
                } else {
                    alert("Алдаа гарлаа");
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
                    alert("Алдаа гарлаа");
                }
            });
        },

        DeleteUserModal(id) {},
    },

    mounted() {
        document.title = "Breathrise - Мэдээ мэдээлэл"
    }
};
</script>

<style>
.demo-drawer-footer{
    width: 100%;
    position: absolute;
    bottom: 0;
    left: 0;
    border-top: 1px solid #e8e8e8;
    padding: 10px 16px;
    text-align: right;
    background: #fff;
}
</style>
