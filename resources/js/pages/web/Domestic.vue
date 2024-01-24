<template>
    <div
        class="relative overflow-hidden bg-cover bg-no-repeat h-[16rem] md:h-[20rem] lg:h-[28rem]"
        style="
            margin-top: 120px;
            background-position: 50% center;
            background-image: url('/assets/img/japan.jpg');
        "
    >
        <div
            class="absolute top-0 right-0 bottom-0 left-0 h-full w-full overflow-hidden bg-fixed"
            style="background-color: rgba(0, 0, 0, 0)"
        >
            <div
                class="flex h-full items-center justify-center text-center text-white"
            >
                <h1 class="mb-6 text-2xl md:text-4xl font-bold" style="font-size: 1.5rem !important;">
                    {{ $t("domesticPage.head_title") }}
                </h1>
            </div>
        </div>
    </div>

    <div class="max-w-[1200px] mx-auto">
        <div
            class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 bg-white md:py-16 md:pr-6"
        >
            <div class="flex justify-center pt-4 col-span-2">
                <div
                    class="sm:grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 -mt-4"
                >
                    <div>
                        <img
                            src="/assets/img/img2.jpg"
                            loading="lazy"
                            class="h-auto w-auto mt-2 md:ml-8"
                            alt="1"
                        />
                    </div>
                    <div class="md:px-10 px-4">
                        <div class="w-full md:mx-8 py-4">
                            <h2
                                class="text-2xl md:text-3xl text-gray-700 font-bold"
                            >
                                {{$t("domesticPage.title1")}}
                            </h2>
                            <p
                                class="text-lg font-medium text-gray-500 text-justify mt-4 font-sans text-gray-500 text-justify"
                            >
                            {{$t("domesticPage.text1")}}
                            </p>
                        </div>
                        <div class="w-full md:mx-8 py-4">
                            <h2
                                class="text-2xl md:text-3xl text-gray-700 font-bold"
                            >
                            {{$t("domesticPage.title2")}}
                            </h2>
                            <p
                                class="text-lg font-medium text-gray-500 text-justify mt-6 font-sans text-gray-500 text-justify"
                            >
                            {{$t("domesticPage.text2")}}
                            </p>
                        </div>
                        <div class="w-full md:mx-8 py-4">
                            <h2
                                class="text-2xl md:text-3xl text-gray-700 font-bold"
                            >
                            {{$t("domesticPage.title3")}}
                            </h2>
                            <p
                                class="text-lg font-medium text-gray-500 text-justify mt-6 font-sans text-gray-500 text-justify"
                            >
                            {{$t("domesticPage.text3")}}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="px-4">
            <div
                class="text-2xl md:text-3xl font-bold box-content h-32 w-auto p-10 border-0 bg-[#f6fafd] mb-4 text-gray-700"
            >
            {{$t("domesticPage.title4")}}
                <div
                    class="mt-4 md:ml-5 text-gray-500 text-lg font-medium text-gray-500 text-justify"
                >
                {{$t("domesticPage.text4_1")}}<br />{{$t("domesticPage.text4_2")}} <br />{{$t("domesticPage.text4_3")}}
                </div>
            </div>
            <div class="pt-2">
                <div
                    class="text-center text-2xl md:text-3xl font-bold my-4 mt-4 text-gray-700"
                >
                {{$t("domesticPage.title5")}}
                </div>
                <p class="py-2 text-lg font-medium text-gray-500 text-justify">
                    {{$t("domesticPage.text5")}}
                </p>
            </div>
        </div>
        <div class="px-4 py-6">
            <div
                class="text-2xl md:text-3xl font-bold box-content lg:h-32 w-auto p-10 border-0 bg-[#f6fafd] text-gray-700"
            >
            {{$t("domesticPage.title6")}}
                <div
                    class="text-lg font-medium text-gray-500 text-justify mt-5 md:ml-5 text-gray-500"
                >
                {{$t("domesticPage.text6_1")}}<br />{{$t("domesticPage.text6_2")}}<br />{{$t("domesticPage.text6_3")}}
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "OptimizedLiving",
};
</script>
