<template>
    <div
        class="font-sans antialiased navbar1"
        style="background-color: #0e1447"
    >
        <nav
            class="flex relative flex flex-wrap items-center justify-start py-3 inline items-center justify-between flex-wrap p-6"
        >
            <div class="flex items-center flex-no-shrink text-white mr-6">
                <a
                    class="font-bold leading-relaxed inline-block py-2 whitespace-nowrap uppercase text-white"
                    href="/"
                >
                    <img
                        src="/assets/exe-logo.png"
                        loading="lazy"
                        class="w-28 px-2 transition duration-300 ease-linear align-middle"
                    />
                </a>
            </div>
            <div
                :class="open ? 'block' : 'hidden'"
                class="w-full flex-grow sm:flex sm:items-center sm:w-auto"
            >
                <div class="text-sm sm:flex-grow">
                    <RouterLink @click.native="InlineButtonClickHandler"
                        class="no-underline block mt-4 sm:inline-block sm:mt-0 px-3 py-2 flex items-center text-sm uppercase leading-snug text-white"
                        :to="{ name: 'Home' }"
                        ><span class="ml-2 text-white font-bold">{{
                            $t("home")
                        }}</span>
                    </RouterLink>
                    <RouterLink @click.native="InlineButtonClickHandler"
                        class="no-underline block mt-4 sm:inline-block sm:mt-0 px-1 py-2 flex items-center text-sm uppercase leading-snug text-white"
                        :to="{ name: 'AboutUs' }"
                        ><span class="ml-2 text-white font-bold">{{
                            $t("about")
                        }}</span>
                    </RouterLink>
                    <div
                        class="dropdown no-underline block mt-4 sm:inline-block sm:mt-0 relative"
                    >
                        <button
                            class="text-white font-semibold p-2 rounded inline-flex items-center"
                        >
                            <span class="mr-1 uppercase">{{
                                $t("overseasProjects")
                            }}</span>
                            <svg
                                class="fill-current h-4 w-4"
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 20 20"
                            >
                                <path
                                    d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"
                                />
                            </svg>
                        </button>
                        <ul
                            style="width: 100%"
                            class="dropdown-menu w-100 darkblue absolute hidden text-gray-700 pt-1 w-100"
                        >
                            <li class="" style="background-color: #0e1447">
                                <RouterLink @click.native="InlineButtonClickHandler"
                                    class="rounded-t text-white hover:text-white uppercase py-2 px-4 block whitespace-no-wrap"
                                    :to="{ name: 'Myanmar' }"
                                    >{{ $t("myanmar") }}</RouterLink
                                >
                            </li>
                            <li class="" style="background-color: #0e1447">
                                <RouterLink @click.native="InlineButtonClickHandler"
                                    class="w-100 uppercase hover:text-white text-white semibold py-2 px-4 block whitespace-no-wrap"
                                    :to="{ name: 'Mongolia' }"
                                    >{{ $t("mongolia") }}</RouterLink
                                >
                            </li>
                        </ul>
                    </div>
                    <RouterLink @click.native="InlineButtonClickHandler"
                        class="no-underline block mt-4 sm:inline-block sm:mt-0 px-2 py-2 flex items-center text-sm uppercase leading-snug text-white"
                        :to="{ name: 'Domestic' }"
                        ><span class="text-white font-bold">{{
                            $t("domesticProjects")
                        }}</span></RouterLink
                    >
                    <div
                        class="dropdown no-underline block mt-4 sm:inline-block sm:mt-0 relative"
                    >
                        <button
                            class="text-white font-semibold p-2 rounded inline-flex items-center"
                        >
                            <span class="mr-1 uppercase">{{
                                $t("internship")
                            }}</span>
                            <svg
                                class="fill-current h-4 w-4"
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 20 20"
                            >
                                <path
                                    d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"
                                />
                            </svg>
                        </button>
                        <ul
                            style="width: 100%"
                            class="dropdown-menu w-100 darkblue absolute hidden text-gray-700 pt-1 w-100"
                        >
                            <li class="" style="background-color: #0e1447">
                                <RouterLink @click.native="InlineButtonClickHandler"
                                    class="rounded-t text-white hover:text-white uppercase py-2 px-4 block whitespace-no-wrap"
                                    :to="{ name: 'Internship' }"
                                    >{{ $t("internship1") }}
                                </RouterLink>
                            </li>
                            <li class="" style="background-color: #0e1447">
                                <RouterLink @click.native="InlineButtonClickHandler"
                                    class="w-100 darkblue hover:text-white text-white semibold py-2 px-4 block whitespace-no-wrap"
                                    :to="{ name: 'Recruit' }"
                                    >{{ $t("recruit") }}</RouterLink
                                >
                            </li>
                        </ul>
                    </div>
                    <RouterLink @click.native="InlineButtonClickHandler"
                        class="no-underline block mt-4 sm:inline-block sm:mt-0 px-2 py-2 flex items-center text-sm uppercase leading-snug text-white"
                        :to="{ name: 'Contact' }"
                        ><span class="text-white font-bold">{{ $t("contact") }}</span></RouterLink
                    >
                </div>
                <div
                    class="rounded inline active:rounded mt-[10px] my-[3px] lg:block"
                ></div>
            </div>
            <div style="background-color: transparent;"
                class="no-underline rounded inline-block text-sm leading-none rounded text-white border-white sm:mt-0"
            >
                <select style="background-color: transparent; border-color: white; border-radius: 15px; font-weight: 500;"
                    @change="changeLang($event)"
                    v-model="lang"
                    class="text-white"
                >
                    <option class="text-black" value="en">
                        <span style="vertical-align: inherit"
                            ><span style="vertical-align: inherit">
                                <span style="margin-top: -10px">🌐</span>
                                EN</span
                            ></span
                        >
                    </option>
                    <option
                        class="text-black"
                        value="jp"
                        selected="selected"
                        aria-selected
                    >
                        <span style="margin-top: -10px">🌐</span> JP
                    </option>
                    <option class="text-black" value="cn">
                        <span style="margin-top: -10px">🌐</span> CN
                    </option>
                </select>
            </div>
            <div class="block sm:hidden">
                <button
                    @click="toggle"
                    class="flex items-center px-3 py-2 border rounded text-teal-lighter border-teal-light hover:text-white hover:border-white"
                >
                    <svg
                        class="fill-current h-3 w-3"
                        viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <title>Menu</title>
                        <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
                    </svg>
                </button>
            </div>
        </nav>
    </div>
</template>

<script>
import Navbar1 from "./Navbar1.vue";
export default {
    components: {
        Navbar1,
    },
    data() {
        return {
            open: false,
            lang: "jp",
            $i18n: {
                locale: "jp",
            },
        };
    },
    methods: {
        toggle() {
            this.open = !this.open;
        },
        InlineButtonClickHandler() {
            this.open = false;
        },
        changeLang() {
            if (this.lang == "cn") {
                this.$i18n.locale = "cn";
            }
            if (this.lang == "en") {
                this.$i18n.locale = "en";
            }
            if (this.lang == "jp") {
                this.$i18n.locale = "jp";
            }
        },
        changeSizeBig() {
            document.documentElement.classList.add("MyClass");
        },
        changeSizeNormal() {
            document.documentElement.classList.remove("MyClass");
        },
    },
    // mounted() {
    //     this.$el.addEventListener("click", () => {
    //         menu.classList.toggle("hidden");
    //     });
    // },
    destroyed() {
        this.$el.removeEventListener("click", this.onClick);
    },
};
</script>
<style scoped>
.dropdown:hover .dropdown-menu {
    display: block;
}

.navbar1 {
    position: fixed;
    top: 0;
    width: 100%;
    z-index: 1000;
}
</style>
