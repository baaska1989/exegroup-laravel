<template>
    <div
        class="relative overflow-hidden bg-cover bg-no-repeat h-[16rem] md:h-[20rem] lg:h-[28rem]"
        style="
            margin-top: 120px;
            background-position: 80% center;
            background-image: url('/assets/img/mongolia1.jpg');
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
                    class="mb-6 font-bold"
                    style="
                        font-size: 1.875rem !important;
                        line-height: 2.25rem !important;
                    "
                >
                    {{ $t("mongoliaPage.head_title") }}
                </h1>
            </div>
        </div>
    </div>

    <div class="max-w-[1200px] mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div class="px-4 md:pl-10 col-span-1">
                <h1
                    class="font-bold text-2xl md:text-3xl text-gray-700 mt-8 text-center md:text-left" style="
                        font-size: 1.875rem !important;
                        line-height: 2.25rem !important;
                    "
                >
                    {{ $t("mongoliaPage.title1") }}<br />{{
                        $t("mongoliaPage.title1_1")
                    }}
                </h1>
                <div class="lg:flex block">
                    <div class="flex text-left">
                        <div
                            class="text-lg font-medium w-auto lg:h-auto md:py-4 pb-8 text-gray-500 max-w-4xl py-4 indent-4"
                        >
                            {{ $t("mongoliaPage.text1_1") }}<br /><br />
                            <p>
                                {{ $t("mongoliaPage.text1_2") }}
                            </p>
                            <br />Olonlog EXE School of Ulaanbaatar<br /><br />Tumurchin
                            Avenue 7/1, Chingeltei district, Ulaanbaatar 15171,
                            Mongolia<br />Tel: (976) 9999 8306 / E-mail:
                            info@exe.edu.mn<br />
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-span-1 p-4">
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
            </div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div class="px-4 md:pl-10 col-span-1">
                <h1
                    class="font-bold text-2xl text-gray-700 mt-8 text-center md:text-left" style="font-size: 1.875rem !important;
    line-height: 2.25rem !important;"
                >
                    {{ $t("mongoliaPage.title2") }}
                </h1>
                <div class="lg:flex block">
                    <div class="flex text-justify">
                        <div
                            class="text-lg font-medium w-auto lg:h-auto md:py-4 pb-8 text-gray-500 max-w-4xl py-4 indent-4"
                        >
                            <p>
                                {{ $t("mongoliaPage.text2_1") }}
                            </p>
                            <br />
                            <p>
                                {{ $t("mongoliaPage.text2_2") }}
                            </p>
                            <br />
                            {{ $t("mongoliaPage.text2_3") }}<br />
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-span-1">
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
    </div>
</template>

<script>
export default {
    name: "Mongolia",
    data() {
        return {
            images: [
                {
                    id: "1",
                    big: "/assets/img/lol12.png",
                    thumb: "/assets/img/lol12.png",
                },
                {
                    id: "2",
                    big: "/assets/img/lol11.png",
                    thumb: "/assets/img/lol11.png",
                },
                {
                    id: "3",
                    big: "/assets/img/school01.jpg",
                    thumb: "/assets/img/school01.jpg",
                },
                {
                    id: "4",
                    big: "/assets/img/school02.jpg",
                    thumb: "/assets/img/school02.jpg",
                },
                {
                    id: "5",
                    big: "/assets/img/school03.jpg",
                    thumb: "/assets/img/school03.jpg",
                },
            ],
            images1: [
                {
                    id: "1",
                    big: "/assets/img/lol16.png",
                    thumb: "/assets/img/lol16.png",
                },
                {
                    id: "2",
                    big: "/assets/img/lol18.png",
                    thumb: "/assets/img/lol18.png",
                },
                {
                    id: "3",
                    big: "/assets/img/lol17.png",
                    thumb: "/assets/img/lol17.png",
                },
                {
                    id: "4",
                    big: "/assets/img/lol19.png",
                    thumb: "/assets/img/lol19.png",
                },
                {
                    id: "5",
                    big: "/assets/img/finance.png",
                    thumb: "/assets/img/finance.png",
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
