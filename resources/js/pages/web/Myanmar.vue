<template>
    <div
        class="relative overflow-hidden bg-cover bg-no-repeat h-[16rem] md:h-[20rem] lg:h-[28rem]"
        style="
            margin-top: 120px;
            background-position: 50% center;
            background-image: url('/assets/img/yangon.jpg');
        "
    >
        <div
            class="absolute top-0 right-0 bottom-0 left-0 h-full w-full overflow-hidden bg-fixed"
            style="background-color: rgba(0, 0, 0, 0)"
        >
            <div
                class="flex h-full items-center justify-center text-center text-white"
            >
                <h1
                    class="mb-6 text-2xl md:text-4xl font-bold"
                    style="font-size: 1.5rem !important"
                >
                    {{ $t("myanmarPage.head_title") }}
                </h1>
            </div>
        </div>
    </div>

    <div class="max-w-[1200px] mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div class="px-4 md:pl-5 col-span-1">
                <h1
                    class="font-bold text-2xl md:text-3xl text-gray-700 mt-8 text-center md:text-left"
                    style="font-size: 1.875rem !important; line-height: 2.25rem"
                >
                    {{ $t("myanmarPage.title1") }}
                </h1>
                <div class="lg:flex block">
                    <div class="flex text-left">
                        <div
                            class="text-lg font-medium w-auto lg:h-auto md:py-4 pb-8 text-gray-500 max-w-4xl indent-4"
                        >
                            <p>
                                {{ $t("myanmarPage.text1") }}
                            </p>
                            <br />
                            <p>
                                {{ $t("myanmarPage.text2") }}
                            </p>
                            <br />{{ $t("myanmarPage.text3")
                            }}<br /><br />Address: 339 Bogyoke Aung San Road,
                            Kyauktada Township, Yangon, Myanmar<br />Tel: (95 1)
                            255 255<br />E-mail: stowersales@myanmar.com.mm<br />
                            Website:<a href="http://www.sakura-tower-yangon.com"
                                >http://www.sakura-tower-yangon.com</a
                            >
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-span-1 md:mt-12 md:p-8 p-4">
                <section>
                    <img :src="currentImage" alt="" class="w-100" />
                    <div class="grid grid-flow-row grid-cols-5">
                        <div
                            class="flex border"
                            v-for="(image, index) in images"
                            :key="image.id"
                            :class="[
                                'thumbnail-image',
                                activeImage == index ? 'active' : '',
                            ]"
                            @click="activateImage(index)"
                        >
                            <img :src="image.thumb" class="w-full" />
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <div class="px-5">
            <div
                class="text-2xl md:text-3xl font-bold box-content w-auto p-2 border-0 bg-[#f6fafd] my-4 text-gray-700"
            >
                {{ $t("myanmarPage.title2") }}
                <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                    <div
                        class="font-normal mt-4 text-base text-gray-500 col-span-1"
                    >
                        {{ $t("myanmarPage.line1") }}<br />
                        &nbsp;{{ $t("myanmarPage.line2") }}<br />
                        &nbsp;{{ $t("myanmarPage.line3") }}<br />
                        &nbsp;{{ $t("myanmarPage.line4") }}<br />
                        &nbsp;{{ $t("myanmarPage.line5") }}<br />
                        &nbsp;{{ $t("myanmarPage.line6") }}
                    </div>
                    <div
                        class="font-normal text-base mt-4 text-gray-500 col-span-1"
                    >
                        - &nbsp;{{ $t("myanmarPage.line7") }}<br />
                        &nbsp;{{ $t("myanmarPage.line8") }}<br />
                        &nbsp;{{ $t("myanmarPage.line9") }}<br />
                        &nbsp;{{ $t("myanmarPage.line10") }}<br />
                        &nbsp;{{ $t("myanmarPage.line11") }}<br />
                        &nbsp;{{ $t("myanmarPage.line12") }}
                    </div>
                </div>
            </div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2">
            <div class="px-4 md:pl-10 col-span-1">
                <h1
                    class="font-bold text-2xl md:text-3xl text-gray-700 text-center md:text-left py-2"
                >
                    {{ $t("myanmarPage.title3") }}
                </h1>
                <div class="lg:flex block">
                    <div class="flex text-justify">
                        <div
                            class="text-lg font-medium w-auto lg:h-auto md:py-4 text-gray-500 max-w-4xl py-4 pb-8 indent-4"
                        >
                            {{ $t("myanmarPage.text4") }}<br /><br />{{
                                $t("myanmarPage.text4=5")
                            }}<br /><br />
                            <p>
                                {{ $t("myanmarPage.text6") }}
                            </p>
                            <br />Address: 9 Inya Road, Block 10, Kamaryut
                            Township, Yangon, Myanmar<br />Tel: (95 1) 525
                            001<br />E-mail:<br />rsvn@sakuraresidence.com.mm,
                            sales@sakuraresidence.com.mm<br />
                            Website:<a
                                href="http://www.sakura-residence-yangon.com/"
                                >http://www.sakura-residence-yangon.com/</a
                            >
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-span-1 md:mt-12 md:p-8 p-4">
                <img :src="currentImage1" alt="" class="w-100" />
                <div class="grid grid-flow-row grid-cols-5 mt-1 gap-1">
                    <div
                        class="flex border"
                        v-for="(image, index) in images1"
                        :key="image.id"
                        :class="[
                            'thumbnail-image',
                            activeImage1 == index ? 'active' : '',
                        ]"
                        @click="activateImage1(index)"
                    >
                        <img :src="image.thumb" class="w-full" />
                    </div>
                </div>
            </div>
        </div>
        <div class="px-5">
            <div
                class="text-3xl font-bold box-content w-auto p-2 border-0 bg-[#f6fafd] my-4 text-gray-700"
            >
                <div class="text-gray-500 grid grid-cols-1 md:grid-cols-2">
                    <div class="col-span-1 text-gray-700">
                        {{ $t("myanmarPage.title4") }}
                        <div
                            class="font-normal text-base mt-5 block text-gray-500 pb-5"
                        >
                            &nbsp;{{ $t("myanmarPage.line13") }}<br />
                            &nbsp;{{ $t("myanmarPage.line14") }}<br />
                            &nbsp;{{ $t("myanmarPage.line15") }}<br />
                            &nbsp;{{ $t("myanmarPage.line16") }}<br />
                            &nbsp;{{ $t("myanmarPage.line17") }}<br />
                            &nbsp;{{ $t("myanmarPage.line18") }}<br />
                            &nbsp;{{ $t("myanmarPage.line19") }}<br />
                            &nbsp;{{ $t("myanmarPage.line20") }}<br />&nbsp;{{
                                $t("myanmarPage.line21")
                            }}<br />
                            &nbsp;{{ $t("myanmarPage.line21_1") }}<br />
                            &nbsp;{{ $t("myanmarPage.line22") }}<br />
                            &nbsp;{{ $t("myanmarPage.line23") }}<br />
                            &nbsp;{{ $t("myanmarPage.line24") }}<br />
                        </div>
                    </div>
                    <div
                        class="col-span-1 text-gray-700 sm:mt-5 lg:mt-0 md:mt-0"
                    >
                        {{ $t("myanmarPage.title5") }}
                        <div class="font-normal text-base mt-5 text-gray-500">
                            &nbsp;{{ $t("myanmarPage.line25") }}<br />
                            &nbsp;{{ $t("myanmarPage.line26") }}<br />
                            &nbsp;{{ $t("myanmarPage.line27") }}<br />
                            &nbsp;{{ $t("myanmarPage.line28") }}<br />
                            &nbsp;{{ $t("myanmarPage.line29") }}<br />
                            &nbsp;{{ $t("myanmarPage.line30") }}<br />
                            &nbsp;&nbsp;{{ $t("myanmarPage.line31") }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "Myanmar",
    data() {
        return {
            images: [
                {
                    id: "1",
                    big: "/assets/img/lol10.jpg",
                    thumb: "/assets/img/lol10.jpg",
                },
                {
                    id: "2",
                    big: "/assets/img/lol6.jpg",
                    thumb: "/assets/img/lol6.jpg",
                },
                {
                    id: "3",
                    big: "/assets/img/lol7.jpg",
                    thumb: "/assets/img/lol7.jpg",
                },
                {
                    id: "4",
                    big: "/assets/img/lol8.jpg",
                    thumb: "/assets/img/lol8.jpg",
                },
                {
                    id: "5",
                    big: "/assets/img/lol9.jpg",
                    thumb: "/assets/img/lol9.jpg",
                },
            ],
            images1: [
                {
                    id: "1",
                    big: "/assets/img/lol1.jpg",
                    thumb: "/assets/img/lol1.jpg",
                },
                {
                    id: "2",
                    big: "/assets/img/lol2.jpg",
                    thumb: "/assets/img/lol2.jpg",
                },
                {
                    id: "3",
                    big: "/assets/img/lol3.jpg",
                    thumb: "/assets/img/lol3.jpg",
                },
                {
                    id: "4",
                    big: "/assets/img/lol4.jpg",
                    thumb: "/assets/img/lol4.jpg",
                },
                {
                    id: "5",
                    big: "/assets/img/lol5.jpg",
                    thumb: "/assets/img/lol5.jpg",
                },
            ],
            activeImage: 0,
            activeImage1: 0,
        };
    },
    computed: {
        currentImage() {
            return this.images[this.activeImage].big;
        },
        currentImage1() {
            return this.images1[this.activeImage1].big;
        },
    },
    methods: {
        nextImage() {
            var active = this.activeImage + 1;
            if (active >= this.images.length) {
                active = 0;
            }
            this.activateImage(active);
        },

        prevImage() {
            var active = this.activeImage - 1;
            if (active < 0) {
                active = this.images.length - 1;
            }
            this.activateImage(active);
        },

        activateImage(imageIndex) {
            this.activeImage = imageIndex;
        },

        nextImage1() {
            var active = this.activeImage1 + 1;
            if (active >= this.images1.length) {
                active = 0;
            }
            this.activateImage1(active);
        },

        prevImage1() {
            var active = this.activeImage1 - 1;
            if (active < 0) {
                active = this.images1.length - 1;
            }
            this.activateImage1(active);
        },
        activateImage1(imageIndex1) {
            this.activeImage1 = imageIndex1;
        },
    },
};
</script>
