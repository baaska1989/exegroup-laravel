<template>
    <div
        class="relative overflow-hidden bg-cover bg-no-repeat h-[16rem] md:h-[20rem] lg:h-[28rem] mb-4"
        style="margin-top: 120px;
            background-position: 50%;
            background-image: url('/assets/img/starter.jpg');
        "
    >
        <div
            class="absolute top-6 sm:top-20 right-0 bottom-0 left-6 sm:left-20 h-full w-full overflow-hidden bg-fixed"
            style="background-color: rgba(0, 0, 0, 0)"
        >
            <div
                class="md:mb-0 md:pb-4 md:max-w-3xl text-[#0E1447] font-medium"
                style="font-size: 60px"
            >
                <h3 class="text-xl sm:text-2xl md:text-5xl xl:text-5xl">
                    {{ $t('slider1') }}
                </h3>
                <h3
                    class="text-xl sm:text-2xl md:text-5xl xl:text-5xl sm:mt-2 sm:pl-5 md:mt-2 md:pl-5 lg:pl-20 lg:mt-4"
                >
                {{ $t('slider2') }}
                </h3>
                <h3
                    class="text-xl sm:text-2xl md:text-5xl xl:text-5xl sm:mt-2 sm:pl-5 md:mt-2 md:pl-5 lg:pl-20 lg:mt-4"
                >
                {{ $t('slider3') }}
                </h3>
            </div>
        </div>
    </div>
    <div class="pb-4 max-w-[1200px] mx-auto">
        <div class="flex justify-center">
            <div class="grid md:grid-cols-2">
                <div class="py-2 md:p-8">
                    <img
                        src="/assets/2.JPG"
                        loading="lazy"
                        class="w-75% h-auto align-middle mx-auto bg-center bg-cover"
                    />
                </div>
                <div class="p-4 md:pr-8 md:pt-8">
                    <h2
                        class="text-2xl font-bold text-gray-700 text-center md:text-left md:text-3xl"
                    >
                        {{ $t('aboutPage.about') }}
                    </h2>
                    <p
                        class="my-4 text-lg font-medium text-gray-500 text-justify"
                    >
                       {{ $t("aboutPage.short_desc") }}
                    </p>
                    <div class="flex justify-center lg:justify-end">
                        <button
                            class="px-14 py-3 bg-darkblue text-white font-medium text-base leading-snug uppercase"
                            role="button"
                            data-mdb-ripple="true"
                            data-mdb-ripple-color="light"
                        >
                            {{ $t('aboutExe.button') }}
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <section class="section h-screen bg-white" id="home">
        <Vue3Lottie
            style="position: absolute"
            ref="customControl"
            :animationData="breathrise"
            :loop="true"
            :speed="0.5"
            :autoPlay="true"
            :direction="forward"
            :pauseAnimation="true"
            :pauseOnHover="true"
        />
        <div class="container py-28">
            <div class="relative">
                <div
                    class="grid lg:grid-cols-2 md:grid-cols-2 grid-cols-1 gap-6"
                >
                    <div class="">
                        <div class="relative">
                            <div
                                class="absolute inset-x-0 top-auto bottom-0"
                            ></div>
                        </div>
                        <div class="flex gap-4 p-1">
                            <div>
                                <h4 class="text-medium text-sky-800">
                                    Your Path to Balance and Harmony
                                </h4>
                                <h2 class="text-5xl mt-5">
                                    Discover your
                                    <p class="inline font-extrabold italic">
                                        Portential
                                    </p>
                                </h2>
                                <p class="font-medium mt-28 mb-6">
                                    Elevate your physical, mental, emotional,
                                    and spiritual well-being through the
                                    transformative power of breathwork.
                                </p>
                                <a
                                    href="#"
                                    class="flex float-left inline items-center gap-2 text-base text-orange-500 hover:text-orange-600 transition-all duration-500"
                                >
                                    See How
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke-width="1.5"
                                        stroke="currentColor"
                                        class="w-5 h-5"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"
                                        ></path>
                                    </svg>
                                </a>
                                <a
                                    href="#"
                                    class="flex ml-8 inline items-center gap-2 text-base text-orange-500 hover:text-orange-600 transition-all duration-500"
                                >
                                    About Us
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke-width="1.5"
                                        stroke="currentColor"
                                        class="w-5 h-5"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"
                                        ></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div
                        class="inline-block h-100 align-text-center text-center"
                    >
                        <div
                            class="flex text-center gap-4 py-6 align-text-center"
                            style="height: 100%"
                        >
                            <h2 class="text-5xl m-auto w-full">
                                <p class="inline font-extrabold italic">
                                    Unlock
                                </p>
                                Your Life
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
import breathrise from "@/pages/web/components/breathrise.json";
export default {
    data() {
        return {
            breathrise: breathrise,
        };
    },
};
</script>
