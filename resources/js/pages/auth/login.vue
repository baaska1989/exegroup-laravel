<template>
    <div
        :class="[
      '-m-3 sm:-mx-8 p-3 sm:px-8 relative h-screen lg:overflow-hidden bg-primary xl:bg-white dark:bg-darkmode-800 xl:dark:bg-darkmode-600',
      'before:hidden before:xl:block before:content-[\'\'] before:w-[57%] before:-mt-[28%] before:-mb-[16%] before:-ml-[13%] before:absolute before:inset-y-0 before:left-0 before:transform before:rotate-[-4.5deg] before:bg-primary/20 before:rounded-[100%] before:dark:bg-darkmode-400',
      'after:hidden after:xl:block after:content-[\'\'] after:w-[57%] after:-mt-[20%] after:-mb-[13%] after:-ml-[13%] after:absolute after:inset-y-0 after:left-0 after:transform after:rotate-[-4.5deg] after:bg-primary after:rounded-[100%] after:dark:bg-darkmode-700',
    ]"
    >
        <div class="container relative z-10 sm:px-10">
            <div class="block grid-cols-2 gap-4 xl:grid">
                <!-- BEGIN: Login Info -->
                <div class="flex-col hidden min-h-screen xl:flex">
                    <a href="" class="flex items-center pt-5 -intro-x">
<!--                        <img-->
<!--                            alt="Midone Tailwind HTML Admin Template"-->
<!--                            class="w-6"-->
<!--                            :src="logoUrl"-->
<!--                        />-->
                        <span class="ml-3 text-lg text-white"> EXE GROUP </span>
                    </a>
                    <div class="my-auto">
<!--                        <img-->
<!--                            alt="Midone Tailwind HTML Admin Template"-->
<!--                            class="w-1/2 -mt-16 -intro-x"-->
<!--                            :src="illustrationUrl"-->
<!--                        />-->
                        <div
                            class="mt-10 text-4xl font-medium leading-tight text-white -intro-x"
                        >
                            A few more clicks to <br />
                            sign in to your account.
                        </div>
                        <div
                            class="mt-5 text-lg text-white -intro-x text-opacity-70 dark:text-slate-400"
                        >
                            Manage all your e-commerce accounts in one place
                        </div>
                    </div>
                </div>
                <!-- END: Login Info -->
                <!-- BEGIN: Login Form -->
                <div class="flex h-screen py-5 my-10 xl:h-auto xl:py-0 xl:my-0">
                    <div
                        class="w-full px-5 py-8 mx-auto my-auto bg-white rounded-md shadow-md xl:ml-20 dark:bg-darkmode-600 xl:bg-transparent sm:px-8 xl:p-0 xl:shadow-none sm:w-3/4 lg:w-2/4 xl:w-auto"
                    >
                        <h2
                            class="text-2xl font-bold text-center intro-x xl:text-3xl xl:text-left"
                        >
                            Login
                        </h2>
                        <form v-on:submit="login">
                            <div
                                v-for="msg in auth_error_messages"
                                :key="msg.id"
                                role="alert"
                                aria-live="polite"
                                aria-atomic="true"
                                class="text-red-500"
                            >
                                <i
                                    class="uil uil-exclamation-octagon font-size-16 text-danger mr-2"
                                ></i>
                                {{ msg }}.
                            </div>
                            <div class="mt-2 text-center intro-x text-slate-400 xl:hidden">
                                A few more clicks to sign in to your account. Manage all your
                                e-commerce accounts in one place
                            </div>
                            <div class="mt-8 intro-x">
                                <input v-model="email"
                                    type="text"
                                    class="block px-4 py-3 rounded intro-x input-sm login__input min-w-full xl:min-w-[350px]"
                                    placeholder="Email" required
                                />
                                <input v-model="password"
                                    type="password"
                                    class="block px-4 rounded py-3 mt-4 intro-x login__input min-w-full xl:min-w-[350px]"
                                    placeholder="Password" required
                                />
                            </div>
                            <div
                                class="flex mt-4 text-xs intro-x text-slate-600 dark:text-slate-500 sm:text-sm"
                            >
                            </div>
                            <div class="mt-5 text-center intro-x xl:mt-8 xl:text-left">
                                <button type="submit" class="w-full rounded px-4 py-3 align-top xl:w-32 xl:mr-3 text-white bg-blue-500 hover:bg-blue-400"
                                >
                                    Login
                                </button>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>

import { mapGetters } from "vuex";

export default {
    data() {
        return {
            email: "",
            password: "",
        };
    },

    methods: {
        login(event) {
            event.preventDefault();
            this.$store.dispatch("LOGIN", {
                email: this.email,
                password: this.password,
            });
        },
    },
    mounted() {
        document.title = "Нэвтрэх"
    },

    computed: {
        ...mapGetters(["auth_error_messages"]),
    },

}

</script>
