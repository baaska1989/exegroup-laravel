<template>
    <section class="print-page">
        <div class="modal-page-header drag-handler">
            <div class="left-actions">
                <h3 class="modal-page-title">
                    <span style="color: orange !important"></span>
                </h3>
            </div>
            <div class="modal-page-header-actions">
                <div class="default-actions">
                    <a
                        href="javascript:void(0)"
                        @click="$modal.hide('change-modal')"
                        class="action-close"
                    >
                        <i
                            class="mdi mdi-close-circle"
                            style="font-size: 16px; text-decoration: none"
                        ></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="modal-page-body" style="background-color: #fff">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="mt-5 mt-lg-4">
                            <div class="row mb-4 d-flex justify-content-center">
                                <label
                                    for="horizontal-password-input"
                                    class="col-sm-3 col-form-label"
                                    >Шинэ нууц үг
                                </label>
                                <div class="col-sm-5">
                                    <input
                                        v-model="password"
                                        type="password"
                                        class="form-control"
                                        id="horizontal-password-input"
                                        placeholder="Enter your password"
                                    />
                                </div>
                            </div>
                            <div class="row mb-4 d-flex justify-content-center">
                                <label
                                    for="horizontal-password-input"
                                    class="col-sm-3 col-form-label"
                                    >Дахин хийнэ үү</label
                                >
                                <div class="col-sm-5">
                                    <input
                                        v-model="passwordVerify"
                                        type="password"
                                        class="form-control"
                                        id="horizontal-password-input"
                                        placeholder="Enter your password"
                                    />
                                </div>
                            </div>
                            <div class="d-flex justify-content-center">
                                <button
                                    class="btn btn-outline-primary w-50 text-center my-4"
                                    align-v="center"
                                    @click="changePassword1(data.id)"
                                >
                                    Хадгалах
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>
<script>
export default {
    props: ["data"],
    data() {
        return {
            password: "",
            passwordVerify: "",
        };
    },
    methods: {
        changePassword1(value) {
            if (this.password.length < 3) {
                this.$toast.error("Нууц үг хэтэрхийн богино байна. ", {
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
            } else {
                if (this.password != this.passwordVerify) {
                    this.$toast.warning("Нууц үг хоорондоо таарахгүй байна. ", {
                        type: "success",
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
                } else {
                    axios
                        .post("/api/changePassword/" + value, {
                            password: this.password,
                        })
                        .then(({ data }) => {
                            if (data.status == true) {
                                this.$toast.success(data.message, {
                                    type: "success",
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
                                this.$modal.hide("change-modal");
                            } else {
                                this.$toast.error(data.message, {
                                    type: "error",
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
                                this.$modal.hide("change-modal");
                            }
                        });
                }
            }
        },
    },
};
</script>
