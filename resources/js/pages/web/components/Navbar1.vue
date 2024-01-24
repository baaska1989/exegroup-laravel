<template>

<Navbar1 />
    <!-- <header>
        <nav
            class="navbar1 relative flex flex-wrap items-center justify-start py-3 inline"
            style="background-color: #0e1447"
        >
            <div
                class="container justify-between pl-8 mx-auto flex flex-wrap items-center"
            >
                <div
                    class="relative flex justify-start lg:w-auto lg:static lg:block"
                >
                    <a
                        class="font-bold leading-relaxed inline-block py-2 whitespace-nowrap uppercase text-white"
                        href="/"
                        ><div>
                            <img
                                src="/assets/exe-logo.png"
                                loading="lazy"
                                class="w-28 px-2 transition duration-300 ease-linear align-middle"
                            /></div></a
                    ><button
                        class="flex flex-grow justify-end items-center text-white font-light cursor-pointer text-4xl lg:hidden outline-none focus:outline-none"
                        type="button"
                    >
                        <i class="fas fa-bars sm:mr-4 md:mr-8 lg:mr-0"></i>
                    </button>
                </div>
                <div
                    class="lg:flex flex-grow lg:flex-none items-center hidden"
                    id="example-navbar-danger"
                >
                    <ul
                        class="flex flex-col lg:flex-row list-none lg:ml-auto justify-start"
                    >
                        <li class="nav-item">
                            <RouterLink
                                class="px-3 py-2 flex items-center text-sm uppercase leading-snug text-white"
                                :to="{ name: 'Home' }"
                                ><span class="ml-2 text-white font-bold">{{
                                    $t("home")
                                }}</span>
                            </RouterLink>
                        </li>
                        <div class="flex justify-start px-2">
                            <div>
                                <div class="relative">
                                    <RouterLink
                                        class="px-1 py-2 flex items-center text-sm uppercase leading-snug text-white"
                                        :to="{ name: 'AboutUs' }"
                                        ><span
                                            class="ml-2 text-white font-bold"
                                            >{{ $t("about") }}</span
                                        >
                                    </RouterLink>
                                </div>
                            </div>
                        </div>
                        <div class="flex justify-center">
                            <div class="dropdown inline-block relative">
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
                                    <li
                                        class=""
                                        style="background-color: #0e1447"
                                    >
                                        <RouterLink
                                            class="rounded-t text-white hover:text-white uppercase py-2 px-4 block whitespace-no-wrap"
                                            :to="{ name: 'Myanmar' }"
                                            >{{ $t("myanmar") }}</RouterLink
                                        >
                                    </li>
                                    <li
                                        class=""
                                        style="background-color: #0e1447"
                                    >
                                        <RouterLink
                                            class="w-100 uppercase hover:text-white text-white semibold py-2 px-4 block whitespace-no-wrap"
                                            :to="{ name: 'Mongolia' }"
                                            >{{ $t("mongolia") }}</RouterLink
                                        >
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <li class="nav-item">
                            <RouterLink
                                class="px-2 py-2 flex items-center text-sm uppercase leading-snug text-white"
                                :to="{ name: 'Domestic' }"
                                ><span class="text-white font-bold">{{
                                    $t("domesticProjects")
                                }}</span></RouterLink
                            >
                        </li>

                        <div class="flex justify-center">
                            <div class="dropdown inline-block relative">
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
                                    <li
                                        class=""
                                        style="background-color: #0e1447"
                                    >
                                        <RouterLink
                                            class="rounded-t text-white hover:text-white uppercase py-2 px-4 block whitespace-no-wrap"
                                            :to="{ name: 'Internship' }"
                                            >{{ $t("internship1") }}
                                        </RouterLink>
                                    </li>
                                    <li
                                        class=""
                                        style="background-color: #0e1447"
                                    >
                                        <RouterLink
                                            class="w-100 darkblue hover:text-white text-white semibold py-2 px-4 block whitespace-no-wrap"
                                            :to="{ name: 'Recruit' }"
                                            >{{ $t("recruit") }}</RouterLink
                                        >
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <li class="nav-item font-bold">
                            <RouterLink
                                class="px-2 py-2 flex items-center text-sm uppercase leading-snug text-white"
                                :to="{ name: 'Contact' }"
                                ><span class="">{{
                                    $t("contact")
                                }}</span></RouterLink
                            >
                        </li>
                    </ul>
                </div>
                <div
                    class="sticky2 active:border-[3px] rounded inline active:border-r-0 border-cyan-600 active:rounded mt-[10px] my-[3px] lg:block"
                >
                    <select
                        @change="changeLang($event)"
                        v-model="lang"
                        class="text-white rounded-lg text-shadow-sm text-lg bg-transparent tracking-wide pd-[5]"
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
            </div>
        </nav>
    </header> -->
</template>

<script>
export default {
    data() {
        return {
            open: false,
        }
       
    },
    methods: {
        toggle() {
            this.open = !this.open;
        },
    },
};
</script>
<style>
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