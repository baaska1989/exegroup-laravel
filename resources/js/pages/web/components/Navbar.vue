<template>
    <nav
        class="relative flex flex-wrap items-center justify-start py-3"
        style="background-color: #0e1447"
    >
        <div
            class="container pl-8 mx-auto flex flex-wrap items-center justify-start ml-0"
        >
            <div
                class="w-full relative flex justify-start lg:w-auto lg:static lg:block"
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
                    <i
                        class="fas fa-bars sm:mr-4 md:mr-8 lg:mr-0"
                        style="margin-right: -80px; margin-top: -5px"
                    ></i>
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
                        <a
                            class="px-3 py-2 flex items-center text-sm uppercase leading-snug text-white hover:text-sky-300"
                            href="/"
                            ><span class="ml-2">{{ $t("home") }}</span></a
                        >
                    </li>
                    <div class="flex justify-start px-2">
                        <div>
                            <div class="dropdown relative">
                                <a
                                    class="px-1 py-2 flex items-center text-sm uppercase leading-snug text-white hover:text-sky-300"
                                    href="/about/"
                                    ><span class="ml-2">{{ $t("about") }}</span></a
                                >
                                <ul
                                    class="dropdown-menu min-w-max absolute bg-darkblue text-base z-50 float-left py-2 list-none text-left shadow-lg mt-1 hidden bg-clip-padding border-none"
                                    aria-labelledby="dropdownMenuButton1tx"
                                >
                                    <li>
                                        <a
                                            class="dropdown-item px-12 text-sm py-2 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 bg-darkblue"
                                            href="/greetings/"
                                            >社長メッセージ</a
                                        >
                                    </li>
                                    <li>
                                        <a
                                            class="dropdown-item px-12 text-sm py-2 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 hover:bg-gray-100"
                                            href="/corporate/"
                                            >会社概要</a
                                        >
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-center">
                        <li class="nav-item">
                            <div class="flex justify-center">
                                <div class="dropdown -ml-8 md:ml-0">
                                    <span
                                        class="flex items-center md:px-6 pt-2.5 pb-2 text-sm font-medium uppercase leading-normal text-white -mt-0.5"
                                        >海外プロジェクト</span
                                    >
                                    <div
                                        class="dropdown-content text-left text-white p-2"
                                    >
                                        <a href="/myanmar/">ミャンマー</a
                                        ><br /><a href="/mongolia/">モンゴル</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </div>
                    <li class="nav-item">
                        <a
                            class="px-3 py-2 flex items-center text-sm uppercase leading-snug text-white hover:text-sky-300"
                            href="/domestic/"
                            ><span class="ml-2">国内プロジェクト</span></a
                        >
                    </li>
                    <div class="flex justify-center">
                        <li class="nav-item1">
                            <div class="flex justify-center">
                                <div class="dropdown text-white">
                                    <span
                                        class="flex items-center bg-darkblue lg:px-6 px-4 pt-2.5 pb-2 text-sm font-medium uppercase leading-normal text-white -mt-0.5"
                                        >インターンシップ・採用</span
                                    >
                                    <div
                                        class="dropdown-content text-left flex-col"
                                        style="
                                            min-width: 200px;
                                            padding-left: 10px;
                                        "
                                    >
                                        <a href="/intership/"
                                            >インターンシップ</a
                                        >
                                        <br /><a href="/recruit/">リクルート</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </div>
                    <li class="nav-item">
                        <a
                            class="px-2 py-2 flex items-center text-sm uppercase leading-snug text-white hover:text-sky-300"
                            href="/contact/"
                            ><span class="ml-2">お問い合わせ</span></a
                        >
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</template>

<script>
export default {
    mounted() {
        this.$el.addEventListener("click", () => {
            menu.classList.toggle("hidden");
        });
    },
    destroyed() {
        this.$el.removeEventListener("click", this.onClick);
    },
};
</script>
