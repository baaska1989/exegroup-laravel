<template>
    <header class="border-b-gray" style="border-bottom: 1px solid #eee;">
        <nav
            class="flex flex-wrap items-center justify-between w-full py-4 md:py-0 px-4 text-lg text-gray-700 bg-white border-b-indigo-500"
        >
            <div>
                <!-- <img src="/assets/logo.png" class="w-48"/> -->
               <a href="/">
                    <img src="/assets/logo_black.png" class="w-48 py-2 md:ml-8"/>
             
                </a> 
            </div>

            <svg
                xmlns="http://www.w3.org/2000/svg"
                id="menu-button"
                class="h-6 w-6 cursor-pointer md:hidden block"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
            >
                <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M4 6h16M4 12h16M4 18h16"
                />
            </svg>

            <div
                class="hidden w-full md:flex md:items-center md:w-auto "
                id="menu"
            >
                <ul
                    class="pt-4 text-base text-gray-700 md:flex md:text-center md:justify-between md:pt-0"
                >
                    <li>
                        <router-link :to="{name: 'AboutUs'}"
                            class="md:p-4 py-2 block text-sky-700 hover:text-sky-900"
                            
                            >About Us</router-link
                        >
                    </li>
                    <li>
                        <router-link :to="{name: 'HospitalWelness'}"
                            class="md:p-4 py-2 block text-sky-700 hover:text-sky-900"
                            >Hospitality Welness</router-link
                        >
                    </li>
                    <li>
                        <router-link
                            class="md:p-4 py-2 block text-sky-700 hover:text-sky-900"
                           :to="{name: 'Events'}"
                            >Events</router-link
                        >
                    </li>
                    <li>
                        <router-link
                            class="md:p-4 py-2 text-sky-700 block hover:text-sky-900"
                            :to="{name: 'NewsCommunity'}"
                            >News & Community</router-link
                        >
                    </li>
                    <li>
                        <router-link
                            class="md:p-4 py-2 block text-sky-700 hover:text-sky-900"
                            :to="{name: 'OptimizedLiving'}"
                            >Optimized Living</router-link
                        >
                    </li>
                    <li>
                        <button
                            class="md:py-1 rounded-5 md:px-2 p-1 md:mt-3 ml-5 block text-whitec flex items-center font-medium text-white bg-sky-800/90 hover:bg-sky-600 transition-all duration-500"
                            href="#"
                            >Book a Session</button
                        >
                    </li>
                </ul>
            </div>
        </nav>
    </header>
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
