<template>
     <section class="print-page">
        <div class="modal-page-header drag-handler">
            <div class="left-actions">
                <h3 class="modal-page-title">
                    <span style="color: #ddb771 !important">
                    {{ data.last_name }}</span>
                </h3>
            </div>
            <div class="modal-page-header-actions">
                <div class="default-actions">
                    <a
                        href="javascript:void(0)"
                        @click="$modal.hide('edit-modal')"
                        class="action-close"
                    >
                        <i
                            class="mdi mdi-close-circle"
                            style="
                                font-size: 16px;
                                text-decoration: none;
                            "
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
                                        for="horizontal-firs_name-input"
                                        class="col-sm-3 col-form-label"
                                        >Таны овог
                                    </label>
                                    <div class="col-sm-5">
                                        <input v-model="data.first_name"
                                            type="text"
                                            class="form-control"
                                            id="horizontal-firs_name-input"
                                            placeholder="Та нэрээ оруулна уу"
                                        />
                                    </div>
                                </div>
                                <div class="row mb-4 d-flex justify-content-center">
                                    <label
                                        for="horizontal-Fullname-input"
                                        class="col-sm-3 col-form-label"
                                        >Таны нэр</label
                                    >
                                    <div class="col-sm-5">
                                        <input v-model="data.last_name"
                                            type="text"
                                            class="form-control"
                                            id="horizontal-Fullname-input"
                                            placeholder="Та нэрээ оруулна уу"
                                        />
                                    </div>
                                </div>
                                <div class="row mb-4 d-flex justify-content-center">
                                    <label
                                        for="horizontal-email-input"
                                        class="col-sm-3 col-form-label"
                                        >Емайл</label
                                    >
                                    <div class="col-sm-5">
                                        <input 
                                        v-model="data.email"
                                            type="email"
                                            class="form-control"
                                            id="horizontal-email-input"
                                            placeholder="Enter your email address"
                                        />
                                    </div>
                                </div>
                                <div class="d-flex justify-content-center ">
                                    <button class="btn btn-outline-primary w-50 text-center my-4" align-v="center" @click="editUser111()">
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
    methods:
    {
        editUser111()
        {
            axios.post('/api/editUser/' + this.data.id, {first_name: this.data.first_name, last_name: this.data.last_name, email: this.data.email})
            .then(({data}) => {
                console.log(this.data.first_name, this.data.last_name);
                alert("amjilltain shinechillee");
            });
        }
    }
}
</script>