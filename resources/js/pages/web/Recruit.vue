<template>
    <div
        class="relative overflow-hidden bg-cover bg-no-repeat h-[16rem] md:h-[20rem] lg:h-[28rem]"
        style="
            margin-top: 120px;
            background-position: 50% center;
            background-image: url('/assets/img/grand.jpg');
        "
    >
        <div
            class="absolute top-0 right-0 bottom-0 left-0 h-full w-full overflow-hidden bg-fixed"
            style="background-color: rgba(0, 0, 0, 0)"
        >
            <div class="pt-24 md:pt-40 text-center text-white py-8 md:py-9">
                <h1 class="mb-6 text-2xl md:text-3xl font-bold items-center">
                    {{ $t("recruitPage.head_title1")}}
                </h1>
            </div>
            <div
                class="text-sm pl-8 md:pl-16 md:text-2xl lg:text-3xl lg:mt-16 font-bold justify-start text-white"
            >
                <h3>{{ $t("recruitPage.head_title2")}}</h3>
                <h3 class="ml-4">
                    {{ $t("recruitPage.head_title3")}}
                </h3>
            </div>
        </div>
    </div>
    <div class="max-w-[1200px] mx-auto">
        <div
            class="mx-auto font-medium text-lg text-left p-4 md:px-24 text-gray-500"
        >
            <p class="mt-4">
                {{ $t("recruitPage.text1")}}
            </p>
            <h1 class="mt-2">
                {{ $t("recruitPage.text2")}}
            </h1>
            <p class="mt-2">
                {{ $t("recruitPage.text3")}}
            </p>
        </div>
        <div class="md:py-4 p-4">
            <div
                class="md:mt-4 md:mx-20 border-2 border-gray-600 bg-darkblue h-14"
            >
                <p class="text-center text-lg font-medium text-white mt-3">
                    {{ $t("recruitPage.table_title")}}
                </p>
            </div>
            <div
                class="divide-darkblue grid grid-cols-3 divide-x md:mr-20 md:ml-20 border-t-2 border-r-2 border-l-2 border-t-darkblue border-r-darkblue border-l-darkblue items-center"
            >
                <div class="text-center font-medium m-3 text-gray-500">
                    {{ $t("recruitPage.row1_1")}}
                </div>
                <div class="p-2 col-span-2m text-gray-500">{{ $t("recruitPage.row1_2")}}</div>
            </div>
            <div
                class="divide-darkblue grid grid-cols-3 divide-x md:mr-20 md:ml-20 border-t-2 border-r-2 border-l-2 border-t-darkblue border-r-darkblue border-l-darkblue items-center"
            >
                <div
                    class="text-center font-medium mt-48 md:mt-28 text-gray-500"
                >
                {{ $t("recruitPage.row2_1")}}
                </div>
                <div class="p-2 col-span-2 text-gray-500">
                    {{ $t("recruitPage.row2_21")}}
                    <br />{{ $t("recruitPage.row2_22")}}<br />※
                    {{ $t("recruitPage.row2_23")}}<br />{{ $t("recruitPage.row2_24")}} <br />{{ $t("recruitPage.row2_25")}}
                    <br />{{ $t("recruitPage.row2_26")}}<br />{{ $t("recruitPage.row2_27")}}
                    <br />{{ $t("recruitPage.row2_28")}}
                </div>
            </div>
            <div
                class="divide-darkblue grid grid-cols-3 divide-x md:mr-20 md:ml-20 border-t-2 border-r-2 border-l-2 border-gray-600 items-center"
            >
                <div class="text-center font-medium m-3 text-gray-500">
                    {{ $t("recruitPage.row3_1")}}
                </div>
                <div class="p-2 col-span-2 text-gray-500">{{ $t("recruitPage.row3_2")}}</div>
            </div>
            <div
                class="divide-darkblue grid grid-cols-3 divide-x md:mr-20 md:ml-20 border-t-2 border-r-2 border-l-2 border-gray-600 items-center"
            >
                <div class="text-center font-medium mt-8 md:m-6 text-gray-500">
                    {{ $t("recruitPage.row4_1")}}
                </div>
                <div class="p-2 col-span-2 text-gray-500">
                    {{ $t("recruitPage.row4_21")}}
                    <br />{{ $t("recruitPage.row4_22")}}
                </div>
            </div>
            <div
                class="divide-darkblue grid grid-cols-3 divide-x md:mr-20 md:ml-20 border-t-2 border-r-2 border-l-2 border-gray-600 items-center"
            >
                <div class="text-center font-medium mt-10 md:m-6 text-gray-500">
                    {{ $t("recruitPage.row5_1")}}
                </div>
                <div class="p-2 col-span-2 text-gray-500">
                    {{ $t("recruitPage.row5_21")}}<br />{{ $t("recruitPage.row5_22")}}
                </div>
            </div>
            <div
                class="divide-darkblue grid grid-cols-3 divide-x md:mr-20 md:ml-20 border-t-2 border-r-2 border-l-2 border-gray-600 items-center"
            >
                <div class="text-center font-medium m-3 text-gray-500">
                    {{ $t("recruitPage.row6_1")}}
                </div>
                <div class="p-2 col-span-2 text-gray-500">
                    {{ $t("recruitPage.row6_2")}}
                </div>
            </div>
            <div
                class="divide-darkblue grid grid-cols-3 divide-x md:mr-20 md:ml-20 border-t-2 border-r-2 border-l-2 border-gray-600 items-center"
            >
                <div class="text-center font-medium m-6 md:m-3 text-gray-500">
                    {{ $t("recruitPage.row7_1")}}
                </div>
                <div class="p-2 col-span-2 text-gray-500">
                    {{ $t("recruitPage.row7_2")}}
                </div>
            </div>
            <div
                class="divide-darkblue grid grid-cols-3 divide-x md:mr-20 md:ml-20 border-t-2 border-r-2 border-l-2 border-gray-600 items-center"
            >
                <div class="text-center font-medium m-3 text-gray-500">
                    {{ $t("recruitPage.row8_1")}}
                </div>
                <div class="p-2 col-span-2 text-gray-500">
                    {{ $t("recruitPage.row8_2")}}
                </div>
            </div>
            <div
                class="divide-darkblue grid grid-cols-3 divide-x md:mr-20 md:ml-20 border-t-2 border-r-2 border-l-2 border-gray-600 items-center"
            >
                <div class="text-center font-medium m-3 text-gray-500">
                    {{ $t("recruitPage.row9_1")}}
                </div>
                <div class="p-2 col-span-2 text-gray-500">
                    {{ $t("recruitPage.row9_2")}}
                </div>
            </div>
            <div
                class="divide-darkblue grid grid-cols-3 divide-x md:mr-20 md:ml-20 border-t-2 border-r-2 border-l-2 border-gray-600 items-center"
            >
                <div class="text-center font-medium mt-7 md:m-3 text-gray-500">
                    {{ $t("recruitPage.row10_1")}}
                </div>
                <div class="p-2 col-span-2 text-gray-500">
                    {{ $t("recruitPage.row10_2")}}
                </div>
            </div>
            <div
                class="divide-darkblue grid grid-cols-3 divide-x md:mr-20 md:ml-20 border-t-2 border-r-2 border-l-2 border-gray-600 items-center"
            >
                <div class="text-center font-medium mt-6 md:m-3 text-gray-500">
                    {{ $t("recruitPage.row11_1")}}
                </div>
                <div class="p-2 col-span-2 text-gray-500">
                    {{ $t("recruitPage.row11_2")}}
                </div>
            </div>
            <div
                class="divide-darkblue grid grid-cols-3 divide-x md:mr-20 md:ml-20 border-t-2 border-r-2 border-l-2 border-gray-600 items-center"
            >
                <div class="text-center font-medium m-3 text-gray-500">
                    {{ $t("recruitPage.row12_1")}}
                </div>
                <div class="p-2 col-span-2 text-gray-500">{{ $t("recruitPage.row12_2")}}</div>
            </div>
            <div
                class="divide-darkblue grid grid-cols-3 divide-x md:mr-20 md:ml-20 border-t-2 border-r-2 border-l-2 border-gray-600 items-center"
            >
                <div class="text-center font-medium mt-8 md:m-7 text-gray-500">
                    {{ $t("recruitPage.row13_1")}}
                </div>
                <div class="col-span-2 p-2 text-gray-500">
                    {{ $t("recruitPage.row13_21")}}<br />{{ $t("recruitPage.row13_22")}}
                </div>
            </div>
            <div
                class="divide-darkblue grid grid-cols-3 divide-x md:mb-12 md:mx-20 border-2 border-gray-600 items-center"
            >
                <div class="text-center font-medium m-3 text-gray-500">
                    {{ $t("recruitPage.row14_1")}}
                </div>
                <div class="p-2 col-span-2 text-gray-500">
                    {{ $t("recruitPage.row14_2")}}
                </div>
            </div>
        </div>
        <div>
            <div>
                <h2
                    class="font-bold text-2xl md:text-3xl text-gray-700 text-center mt-5"
                >
                {{ $t("recruitPage.title1")}}
                </h2>
                <img
                    src="/assets/img/border.png"
                    alt=""
                    class="mx-auto max-w-2xl w-[95%]"
                />
            </div>
            <div class="md:flex grid grid-cols-1 md:grid-cols-2 mt-4 md:ml-16">
                <img
                    src="/assets/img/img3.png"
                    class="md:ml-8 h-[250px] w-[250px] m-auto"
                    loading="lazy"
                />
                <div class="grid">
                    <h3
                        class="text-center md:text-left md:ml-5 my-2 font-bold text-gray-600"
                    >
                        中塚翔大（Shota Nakatsuka）　<br />Recruiter
                    </h3>
                    <div class="mt-32">
                        <p
                            class="lg:-mt-40 font-medium text-lg m-4 md:mr-20 font-lg sm:-mt-32 -mt-32 text-gray-500"
                        >
                        {{ $t("recruitPage.text4")}}
                        </p>
                    </div>
                </div>
            </div>
            <div class="flex justify-center">
                <div>
                    <h2
                        class="font-bold text-2xl md:text-3xl text-gray-700 text-center md:m-4"
                    >
                    {{ $t("recruitPage.title2")}}
                    </h2>
                    <div class="md:px-20 px-4">
                        <div class="block relative w-full">
                            <button
                                type="button"
                                class="flex justify-between items-center w-full py-4 border-b border-b-blue-gray-100 text-blue-gray-700 antialiased font-sans text-xl font-semibold leading-snug select-none hover:text-blue-gray-900 transition-colors"
                            >
                                <p class="text-gray-700 font-medium">
                                    {{ $t("recruitPage.question1")}}
                                </p>
                                <span class="w-5 h-5 ml-4"
                                    ><svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20"
                                        fill="currentColor"
                                    >
                                        <path
                                            fill-rule="evenodd"
                                            d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                                            clip-rule="evenodd"
                                        ></path>
                                    </svg>
                                </span>
                            </button>
                            <div class="overflow-hidden" style="height: 0px">
                                <div
                                    class="block w-full py-4 antialiased font-sans text-sm font-light leading-normal text-medium"
                                >
                                    <p class="text-gray-500 font-lg">
                                        {{ $t("recruitPage.answer1")}}
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="block relative w-full">
                            <button
                                type="button"
                                class="flex justify-between items-center w-full py-4 border-b border-b-blue-gray-100 text-blue-gray-700 antialiased font-sans text-xl font-semibold leading-snug select-none hover:text-blue-gray-900 transition-colors"
                            >
                                <p class="text-gray-700 font-medium">
                                    {{ $t("recruitPage.question2")}}
                                </p>
                                <span class="w-5 h-5 ml-4"
                                    ><svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20"
                                        fill="currentColor"
                                    >
                                        <path
                                            fill-rule="evenodd"
                                            d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                                            clip-rule="evenodd"
                                        ></path></svg></span>
                            </button>
                            <div class="overflow-hidden" style="height: 0px">
                                <div
                                    class="block w-full py-4 text-gray-700 antialiased font-sans text-sm font-light leading-normal"
                                >
                                    <p class="text-gray-500 font-medium">
                                        {{ $t("recruitPage.answer2")}}
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="block relative w-full">
                            <button
                                type="button"
                                class="flex justify-between items-center w-full py-4 border-b border-b-blue-gray-100 text-blue-gray-700 antialiased font-sans text-xl font-semibold leading-snug select-none hover:text-blue-gray-900 transition-colors"
                            >
                                <p class="text-gray-700 font-medium">
                                    {{ $t("recruitPage.question3")}}
                                </p>
                                <span class="w-5 h-5 ml-4"
                                    ><svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20"
                                        fill="currentColor"
                                    >
                                        <path
                                            fill-rule="evenodd"
                                            d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                                            clip-rule="evenodd"
                                        ></path></svg></span>
                            </button>
                            <div class="overflow-hidden" style="height: 0px">
                                <div
                                    class="block w-full py-4 text-gray-700 antialiased font-sans text-sm font-light leading-normal"
                                >
                                    <p class="text-gray-500 font-medium">
                                        {{ $t("recruitPage.answer3")}}
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="block relative w-full">
                            <button
                                type="button"
                                class="flex justify-between items-center w-full py-4 border-b border-b-blue-gray-100 text-blue-gray-700 antialiased font-sans text-xl font-semibold leading-snug select-none hover:text-blue-gray-900 transition-colors"
                            >
                                <p class="text-gray-700 font-medium">
                                    {{ $t("recruitPage.question4")}}
                                </p>
                                <span class="w-5 h-5 ml-4"
                                    ><svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20"
                                        fill="currentColor"
                                    >
                                        <path
                                            fill-rule="evenodd"
                                            d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                                            clip-rule="evenodd"
                                        ></path></svg></span>
                            </button>
                            <div class="overflow-hidden" style="height: 0px">
                                <div
                                    class="block w-full py-4 text-gray-700 antialiased font-sans text-sm font-light leading-normal"
                                >
                                    <p class="text-gray-500 font-medium">
                                        {{ $t("recruitPage.answer4")}}
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="block relative w-full">
                            <button
                                type="button"
                                class="flex justify-between items-center w-full py-4 border-b border-b-blue-gray-100 text-blue-gray-700 antialiased font-sans text-xl font-semibold leading-snug select-none hover:text-blue-gray-900 transition-colors"
                            >
                                <p class="text-gray-700 font-medium">
                                    {{ $t("recruitPage.question5")}}
                                </p>
                                <span class="w-5 h-5 ml-4"
                                    ><svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20"
                                        fill="currentColor"
                                    >
                                        <path
                                            fill-rule="evenodd"
                                            d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                                            clip-rule="evenodd"
                                        ></path></svg></span>
                            </button>
                            <div class="overflow-hidden" style="height: 0px">
                                <div
                                    class="block w-full py-4 text-gray-700 antialiased font-sans text-sm font-light leading-normal"
                                >
                                    <p
                                        class="text-gray-500 font-medium text-left"
                                    >
                                    {{ $t("recruitPage.answer5")}}
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="block relative w-full">
                            <button
                                type="button"
                                class="flex justify-between items-center w-full py-4 border-b border-b-blue-gray-100 text-blue-gray-700 antialiased font-sans text-xl font-semibold leading-snug select-none hover:text-blue-gray-900 transition-colors"
                            >
                                <p class="text-gray-700 font-medium">
                                    {{ $t("recruitPage.question6")}}
                                </p>
                                <span class="w-5 h-5 ml-4"
                                    ><svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20"
                                        fill="currentColor"
                                    >
                                        <path
                                            fill-rule="evenodd"
                                            d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                                            clip-rule="evenodd"
                                        ></path></svg></span>
                            </button>
                            <div class="overflow-hidden" style="height: 0px">
                                <div
                                    class="block w-full py-4 text-gray-700 antialiased font-sans text-sm font-light leading-normal"
                                >
                                    <p class="text-gray-500 font-medium">
                                        {{ $t("recruitPage.answer6")}}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="items-center text-center">
                        <a
                            href="https://docs.google.com/forms/d/e/1FAIpQLSddgYtieThncUj6lXwjolR6aRRCVLUjdG63GqD7Teo7uwjXvA/viewform?usp=send_form"
                            ><button
                                class="inline-block px-20 py-5 m-10 bg-[#4473CA] text-white font-extrabold text-2xl rounded-lg leading-snug uppercase focus:outline-none focus:ring-0 transition duration-150 ease-in-out"
                                role="button"
                                data-mdb-ripple="true"
                                data-mdb-ripple-color="light"
                            >
                            {{ $t("internshipPage.button")}}
                            </button></a
                        >
                    </div>
                </div>
            </div>
        </div>
    </div>
    <vue-collapsible-panel-group>
    <vue-collapsible-panel>
        <template #title>
            Panel A Title
        </template>
        <template #content>
            Panel A Content
        </template>
    </vue-collapsible-panel>
    <vue-collapsible-panel>
        <template #title>
            Panel B Title
        </template>
        <template #content>
            Panel B Content
        </template>
    </vue-collapsible-panel>
</vue-collapsible-panel-group>
</template>
<script>
    import {
        VueCollapsiblePanelGroup,
        VueCollapsiblePanel,
    } from "@dafcoe/vue-collapsible-panel";
    import "@dafcoe/vue-collapsible-panel/dist/vue-collapsible-panel.css";
    export default {
        data() {
            return {};
        },
    };
</script>

<style lang="scss"></style>

