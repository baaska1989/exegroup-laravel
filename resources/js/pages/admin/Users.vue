<template>
    <div class="flex items-center mt-8 intro-y">
        <h2 class="mr-auto pl-5 text-lg font-medium">Системийн хэрэглэгч</h2>
        <div class="flex w-full mt-4 sm:w-auto sm:mt-0">
            <Button @click="value = true" type="primary">Шинэ хэрэглэгч</Button>
        </div>
    </div>
    <div class="p-5 mt-5 intro-y box">
        <div class="col-span-12 overflow-auto intro-y 2xl:overflow-visible">
            <Table :loading="loading" border :columns="columns" :data="users" size="small"></Table>
        </div>
    </div>
    <Drawer
        title="Шинэ хэрэглэгч"
        v-model="value"
        width="720"
        :mask-closable="false"
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
                    <FormItem
                        label="Е-мэйл хаяг"
                        prop="email"
                        label-position="top"
                    >
                        <Input
                            v-model="formData.email"
                            placeholder="Е-мэйл хаяг"
                        />
                    </FormItem>
                </Col>
                <Col span="12">
                    <FormItem
                        label="Нууц үг"
                        prop="password"
                        label-position="top"
                    >
                        <Input
                            type="password"
                            v-model="formData.password"
                            placeholder="Нууц үг ээ оруулна уу"
                        />
                    </FormItem>
                </Col>
                <Col span="12">
                    <FormItem
                        prop="role"
                        label="Хэрэглэгчийн эрх"
                        label-position="top"
                    >
                        <Select
                            v-model="formData.role"
                            placeholder="Эрх"
                            default-label="Эрх"
                            aria-placeholder=""
                        >
                            <Option
                                v-for="item in roleList"
                                :value="item.value"
                                :key="item.value"
                                >{{ item.label }}</Option
                            >
                        </Select>
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
            </Row>
        </Form>
        <div class="demo-drawer-footer">
            <Button style="margin-right: 8px" @click="value = false"
                >Хаах</Button
            >
            <Button type="primary" @click="saveUser('formValidate')"
                >Хадгалах</Button
            >
        </div>
    </Drawer>
</template>

<script>
import { resolveComponent } from 'vue';
export default {
    name: "Users",

    data() {
        return {
            value: false,
            loading: false,
            users: [],
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
            formData: {
                first_name: "",
                last_name: "",
                phone_number: "",
                password: "",
                role: null,
                email: "",
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
                email: [
                    {
                        required: true,
                        message: "Нэвтрэх е-мэйл заавал оруулна",
                        trigger: "blur",
                    },
                ],
                role: [
                    {
                        required: true,
                        message: "Хэрэглэгчийн эрхийг сонгоно уу",
                        trigger: "blur",
                    },
                ],
                password: [
                    {
                        required: true,
                        message: "Нууц үгээ оруулна уу.",
                        trigger: "blur",
                    },
                    {
                        type: "string",
                        min: 3,
                        message: "Нууц үг хамгийн багадаа 3н тэмдэгт байна",
                        trigger: "blur",
                    },
                ],
            },
            roleList: [
                {
                    value: "admin",
                    label: "Админ",
                },
                {
                    value: "manager",
                    label: "Менежер",
                },
            ],
        };
    },
    created() {
        this.getUsers();
    },
    methods: {
        getUsers() {
            this.loading = true;
            axios.get("/api/getUsers").then(({ data }) =>
            {
                if (data.status){
                    this.loading = false;
                    this.users = data.data;
                }


            });
        },

        saveUser(name) {
            this.$refs[name].validate((valid) => {
                if (valid) {
                    axios.post("/api/saveUser", {
                            first_name: this.formData.first_name,
                            last_name: this.formData.last_name,
                            phone_number: this.formData.phone_number,
                            password: this.formData.password,
                            role: this.formData.role,
                            email: this.formData.email
                    }).then(({data}) => {
                        if(data.status)
                        {
                            this.$Message.success("Амжилттай хадгаллаа!");
                            this.getUsers();
                            this.value = false;
                        }
                    }).finally(() => {

                    })
                } else {
                    this.$Message.error("Мэдээлэлээ гүйцэт бөглөнө үү !");
                }
            });
        },
    },

    mounted() {
        document.title = "Хэрэглэгчийн мэдээлэл";
    },
};
</script>

<style scoped></style>
