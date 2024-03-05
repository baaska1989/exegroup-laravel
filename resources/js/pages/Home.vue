<template>
    <Banner />
    <div
        class="p-12 text-center relative overflow-hidden bg-no-repeat bg-cover bg-fixed"
        loading="lazy"
        style="background-image: url('/assets/img/img4.jpg'); height: 400px"
    >
        <div
            class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden"
            style="background-color: rgba(0, 0, 0, 0.25)"
        >
            <div class="flex justify-center items-center h-full">
                <div class="text-gray-700 p-4 opacity-80 max-w-2xl bg-gray-50">
                    <h4 class="font-normal text-md mb-2 text-black"></h4>
                    <div>
                        <h2
                            class="font-semibold text-2xl md:text-3xl text-gray-800 pb-8"
                        >
                        {{ $t("recruitment.title")}}
                        </h2>
                    </div>
                    <p class="font-medium text-gray-800 text-lg">
                        {{ $t("recruitment.text")}}
                    </p>
                    <button @click="$router.push('recruit')"
                        class="px-14 mt-5 py-3 bg-darkblue text-white font-medium text-base leading-snug uppercase"
                        role="button"
                        data-mdb-ripple="true"
                        data-mdb-ripple-color="light"
                    >
                    {{ $t("recruitment.button")}}
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="max-w-[1200px] mx-auto">
        <div class="flex justify-center">
            <div class="grid md:grid-cols-2">
                <div class="md:p-8">
                    <img
                        src="/assets/img/i.jpg"
                        loading="lazy"
                        class="w-75% h-auto align-middle mx-auto bg-center bg-cover"
                    />
                </div>
                <div class="p-4 md:py-8 md:pr-10">
                    <h2
                        class="text-2xl md:text-3xl font-semibold text-gray-700 text-center md:text-left"
                    >
                        {{$t("myanmarPage.head_title")}}
                    </h2>
                    <p
                        class="my-4 text-lg font-medium text-gray-500 text-justify"
                    >
                        {{ $t("domestic.text1") }}
                    </p>
                    <div class="flex justify-center lg:justify-end">
                        <RouterLink :to="{name: 'Myanmar'}"
                            class="px-14 py-3 bg-darkblue text-white font-medium text-base leading-snug uppercase"
                            role="button"
                            data-mdb-ripple="true"
                            data-mdb-ripple-color="light"
                        >
                        {{ $t("recruitment.button")}}
                        </RouterLink>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="py-8 max-w-[1200px] mx-auto">
        <div class="flex justify-center">
            <div class="grid md:grid-cols-2">
                <div class="p-4 md:px-8">
                    <h2
                        class="text-2xl md:text-3xl font-semibold text-gray-700 text-center md:text-left"
                    >
                        {{ $t("sharedhouse.title")}}
                    </h2>
                    <p
                        class="my-4 text-lg font-medium text-gray-500 text-justify"
                    >
                    {{ $t("sharedhouse.text")}}
                    </p>
                    <div
                        class="flex justify-center md:justify-start align-text-bottom"
                    >
                        <RouterLink :to="{name: 'Mongolia'}"
                            class="px-14 py-3 bg-darkblue text-white font-medium text-base leading-snug uppercase"
                            role="button"
                            data-mdb-ripple="true"
                            data-mdb-ripple-color="light"
                        >
                        {{ $t("recruitment.button")}}
                        </RouterLink>
                    </div>
                </div>
                <div class="md:px-4 row-start-1 md:row-span-1">
                    <img
                        src="/assets/img/exe website mongolia.jpg"
                        loading="lazy"
                        class="w-75% h-auto align-middle mx-auto bg-center bg-cover"
                    />
                </div>
            </div>
        </div>
    </div>

    <div class="bg-[#f6fafd]">
        <div class="md:p-4">
            <h2
                class="font-bold flex text-2xl md:text-3xl mb-5 mt-5 lg:p-6 text-gray-700 justify-center"
            >
                {{ $t("projects.bigtitle") }}
            </h2>
            <div class="flex justify-center pt-4">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-1">
                    <div class="col-span-1">
                        <img
                            src="/assets/img/1659582198.jpg"
                            loading="lazy"
                            class="lg:h-52 transition duration-300 ease-linear align-middle sm:h-full"
                            style="cursor: pointer"
                        />
                    </div>
                    <div class="max-w-lg m-4 col-span-1">
                        <h1 class="text-primary text-sm mb-2" style="font-weight: bold;">
                            August 21, 2022
                        </h1>
                        <h2
                            class="font-serif text-2xl md:text-3xl text-gray-700 font-bold"
                        >
                        {{ $t("projects.title1") }}
                        </h2>
                        <p style="font-size: 16px; font-weight: bold;"
                            class="font-medium mt-6 font-sans text-gray-500 max-w-2xl"
                        >
                        {{ $t("projects.text1") }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- <Introducting />
    <Transformational />
    <Breathwork /> -->
</template>

<script>
import Banner from "@/pages/web/components/Banner.vue";

import Breathwork from "@/pages/web/components/Breathwork.vue";
import Transformational from "@/pages/web/components/Transformational.vue";
import Introducting from "@/pages/web/components/Introducting.vue";
import Line from "@/pages/web/components/Line.vue";
import Dedicated from "@/pages/web/components/Dedicated.vue";
export default {
    name: "Home",
    data() {
        return {
            title: this.$t("home"),
        };
    },
    components: {
        Banner,
        Breathwork,
        Transformational,
        Introducting,
        Line,
        Dedicated,
    },
    mounted: {
        toRecruit(){

        }
    },

    // created() {
    //     console.log(this.breathrise);
    // },
    mounted() {
        document.title = this.title;
    },
};
</script>

<style scoped></style>
