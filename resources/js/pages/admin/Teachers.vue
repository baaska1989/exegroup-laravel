<template>
    <div
        class="flex flex-col items-center mt-2 intro-y sm:flex-row p-2 intro-y box"
    >
        <h2 class="mr-auto text-lg font-medium">Багшийн мэдээлэл</h2>
        <div class="flex w-full mt-4 sm:w-auto sm:mt-0">
            <Button @click="value = true" type="primary"><Icon
                type="ios-add"
                color="success"
                size="20"
            /><span>Багш нэмэх</span></Button>
        </div>
    </div>

    <div class="p-5 mt-2 text-start intro-y box">
        <Table :loading="loading" border :columns="columns" :data="teachers.data" size="small"></Table>
        <table class="w-full text-align-left">
            <thead>
                <tr>
                    <th>#</th>
                    <th class="text-left pl-5">Овог нэр</th>
                    <th class="text-left pl-5">Хаяг</th>
                    <th></th>
                    <th>Үйлдэл</th>
                </tr>
<!--                <tr>-->
<!--                    <th></th>-->
<!--                    <th></th>-->
<!--                    <th class="text-left pl-5">-->
<!--                        <input-->
<!--                            type="text"-->
<!--                            placeholder="Утасны дугаар"-->
<!--                            class="placeholder:italic placeholder:text-slate-400 block bg-white w-full border border-slate-200 rounded-md py-2 pl-9 pr-3 shadow-sm focus:outline-none focus:border-sky-300 focus:ring-sky-200 focus:ring-1 sm:text-sm"-->
<!--                        />-->
<!--                    </th>-->
<!--                    <th></th>-->
<!--                    <th></th>-->
<!--                </tr>-->
            </thead>
            <tbody>
                <tr
                    v-for="(client, index) in teachers.data"
                    class="p-5 cursor-pointer mt-5"
                    v-on:dblclick="getTeacher(client.id)"
                >
                    <td class="text-center">{{ ++index }}</td>
                    <td class="pl-2 font-medium">
                        {{ client.first_name }} {{ client.last_name }}
                    </td>
                    <td class="p-2">
                        {{ client.phone_number }}
                    </td>
                    <td>
                        {{ client.address }}
                    </td>
                    <td>
                        <Icon
                            type="ios-brush-outline"
                            color="orange"
                            size="20"
                        />

                        <Icon @click="deleteTeacher(client.id, client.first_name, client.last_name)"
                            type="ios-create-outline"
                            color="red"
                            size="20"
                            style="margin-left: 15px"
                        />
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <Drawer
        title="Шинэ харилцагч"
        v-model="value"
        width="720"
        :mask-closable="true"
        :styles="styles"
    >
        <Form ref="formValidate" :model="formData" :rules="ruleValidate">
            <Row :gutter="32">
                <Col span="12">
                    <FormItem
                        prop="first_name"
                        label="Овог"
                        label-position="top"
                    >
                        <Input
                            v-model="formData.first_name"
                            placeholder="Овог оруулна уу"
                        />
                    </FormItem>
                </Col>
                <Col span="12">
                    <FormItem prop="last_name" label="Нэр" label-position="top">
                        <Input
                            v-model="formData.last_name"
                            placeholder="Нэр оруулна уу"
                        />
                    </FormItem>
                </Col>
            </Row>
            <Row :gutter="32">
                <Col span="12">
                    <FormItem label="Регистийн дугаар" label-position="top">
                        <Input
                            v-model="formData.register"
                            placeholder="Регистийн дугаар"
                        />
                    </FormItem>
                </Col>
                <Col span="12">
                    <FormItem
                        prop="phone_number"
                        label="Утасны дугаар"
                        label-position="top"
                    >
                        <Input
                            type="number"
                            v-model="formData.phone_number"
                            placeholder="Утасны дугаар оруулна уу"
                        />
                    </FormItem>
                </Col>
                                <Col span="12">
                    <FormItem
                        prop="pincode"
                        label="Пин дугаар"
                        label-position="top"
                    >
                        <Input
                            type="number"
                            v-model="formData.pincode"
                            placeholder="Пин дугаар оруулна уу"
                        />
                    </FormItem>
                </Col>
            </Row>

        </Form>
        <div class="demo-drawer-footer">
            <Button style="margin-right: 8px" @click="value = false"
                >Хаах</Button
            >
            <Button type="primary" @click="saveClient('formValidate')"
                >Хадгалах</Button
            >
        </div>
    </Drawer>
</template>

<script>
import {resolveComponent} from "vue";

export default {
    data() {
        return {
            value: false,
            modal: false,
            client_list_loading: false,
            columns: [
                {
                    title: '#',
                    key: 'id',
                    width: 50
                },
                {
                    title: 'Овог',
                    key: 'first_name'
                },
                {
                    title: 'Нэр',
                    key: 'last_name'
                },
                {
                    title: 'Емайл',
                    key: 'email'
                },
                {
                    title: 'Эрх',
                    key: 'role'
                },
                {
                    title: 'Үйлдэл',
                    key: 'action',
                    width: 180,
                    align: 'center',
                    render: (h, params) => {
                        return h('div', [
                            h(resolveComponent('Button'), {
                                type: 'primary',
                                size: 'small',
                                style: {
                                    marginRight: '5px'
                                },
                                onClick: () => {
                                    console.log(params.index);
                                    this.show(params.index)
                                }
                            }, {
                                default() {
                                    return 'View'
                                }
                            }),
                            h(resolveComponent('Button'), {
                                type: 'error',
                                size: 'small',
                                onClick: () => {
                                    this.remove(params.index)
                                }
                            }, {
                                default() {
                                    return 'Delete'
                                }
                            })
                        ]);
                    }
                }
            ],
            teachers: {
                current_page: 0,
                data: [],
                first_page_url: null,
                from: null,
                last_page: null,
                last_page_url: null,
                next_page_url: null,
                path: null,
                per_page: null,
                prev_page_url: null,
                to: null,
                total: null,
            },
            orderOptions: {
                orderColumn: "created_at",
                orderBy: "desc",
                rowsPerPage: 50,
                phone_number: "",
            },
            selectedClient: null,
            styles: {
                height: "calc(100% - 55px)",
                overflow: "auto",
                paddingBottom: "53px",
                position: "static",
            },
            formData: {
                first_name: "",
                last_name: "",
                level: "",
                phone_number: "",
                address: "",
                pincode: ""
            },
            ruleValidate: {
                first_name: [
                    {
                        required: true,
                        message: "Овог оруулна уу ",
                        trigger: "blur",
                    },
                ],
                last_name: [
                    {
                        required: true,
                        message: "Нэр оруулна уу",
                        trigger: "blur",
                    },
                ],
                phone_number: [
                    {
                        required: true,
                        message: "Утасны дугаар заавал оруулна ",
                        trigger: "blur",
                    },
                ],
                pincode: [
                    {
                        required: true,
                        message: "Пин дугаар оруулна уу ",
                        trigger: "blur",
                    },
                ],
                register: [
                    {
                        required: true,
                        message: "Регистерийн дугаар оруулна уу.",
                        trigger: "blur",
                    },
                    {
                        type: "string",
                        min: 6,
                        message:
                            "Багадаа 6н оронтой байна",
                        trigger: "blur",
                    },
                ],
            },
        };
    },

    created() {
        this.getTeachers(1);
    },

    methods: {
        getTeachers(page) {
            this.$Loading.start();
            this.client_list_loading = true;
            axios
                .post(`/api/getTeachers?page=${page}`, {
                    orderOptions: this.orderOptions,
                })
                .then(({ data }) => {
                    if (data.status) {
                        this.$Loading.finish();
                        this.teachers = data.data;
                    }
                })
                .finally(() => {
                    this.client_list_loading = false;
                });
        },

        getTeacher() {
            this.value = true;
        },

        saveClient(name) {
            this.$refs[name].validate((valid) => {
                if (valid) {
                    this.client_list_loading = true;
                    axios
                        .post("/api/saveTeacher", this.formData
                    // { formData
                    //         first_name: this.formData.first_name,
                    //         last_name: this.formData.last_name,
                    //         phone_number: this.formData.phone_number,
                    //         register: this.formData.register,
                    //         address: this.formData.address,
                    //     }
                        )
                        .then(({ data }) => {
                            if (data.status) {
                                this.getTeachers(1);
                                this.value = false;
                                this.$Message.success("Амжилттай хадгаллаа");
                                this.client_list_loading = false;
                            } else {
                                this.$Message.error("Хадгалхад алдаа гарлаа!");
                                this.client_list_loading = false;
                            }
                        });
                } else {
                    this.client_list_loading = false;
                    this.$Message.error("Мэдээлэлээ гүйцэт бөглөнө үү !");
                }
            });
        },

        ok() {
            this.$Message.info("Clicked ok");
        },

        cancel() {
            this.$Message.info("Clicked cancel");
        },

        deleteTeacher(value, fname, lname)
        {
            this.$swal({
                title: "Устгахдаа итгэлтэ байна уу?",
                text: fname + ' ' + lname,
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Тийм, устгах!",
                cancelButtonText: "Болих"
            }).then((result) => {
                if (result.isConfirmed) {
                    console.log(result.isConfirmed);
                    axios.get('/api/deleteTeacher/' + value).then(({data}) =>
                    {
                        if (data.status){
                            this.$Message.success("Амжилттай устаглаа");
                            this.getTeachers()
                        }
                    });
                }
            });
        }
    },

    mounted() {
        document.title = "Багшийн мэдээлэл";
    },
};
</script>
<style>
.demo-drawer-footer {
    width: 100%;
    position: absolute;
    bottom: 0;
    left: 0;
    border-top: 1px solid #e8e8e8;
    padding: 10px 16px;
    text-align: right;
    background: #fff;
}

.row {display:table-row;}
.cell {display:table-cell; padding:5px;}
</style>
