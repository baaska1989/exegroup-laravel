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
                <h1 class="mb-6 text-2xl md:text-4xl font-bold">
                    {{ $t("mongoliaPage.head_title") }}
                </h1>
            </div>
        </div>
    </div>

    <div class="max-w-[1200px] mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div class="px-4 md:pl-10 col-span-1">
                <h1
                    class="font-bold text-2xl md:text-3xl text-gray-700 mt-8 text-center md:text-left"
                >
                {{ $t("mongoliaPage.title1") }}<br />{{ $t("mongoliaPage.title1_1") }}
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
            <div class="col-span-1 md:mt-12 md:p-8 p-4">
                <div
                    class="image-gallery image-gallery-using-mouse"
                    aria-live="polite"
                >
                    <div
                        class="image-gallery-content image-gallery-thumbnails-bottom"
                    >
                        <div
                            class="image-gallery-slide-wrapper image-gallery-thumbnails-bottom"
                        >
                            <button
                                type="button"
                                class="image-gallery-icon image-gallery-left-nav"
                                aria-label="Previous Slide"
                            >
                                <svg
                                    class="image-gallery-svg"
                                    xmlns="http://www.w3.org/2000/svg"
                                    viewBox="6 0 12 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="1"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                >
                                    <polyline
                                        points="15 18 9 12 15 6"
                                    ></polyline>
                                </svg></button
                            ><button
                                type="button"
                                class="image-gallery-icon image-gallery-right-nav"
                                aria-label="Next Slide"
                            >
                                <svg
                                    class="image-gallery-svg"
                                    xmlns="http://www.w3.org/2000/svg"
                                    viewBox="6 0 12 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="1"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                >
                                    <polyline
                                        points="9 18 15 12 9 6"
                                    ></polyline>
                                </svg>
                            </button>
                            <div class="image-gallery-swipe">
                                <div class="image-gallery-slides">
                                    <div
                                        aria-label="Go to Slide 1"
                                        tabindex="-1"
                                        class="image-gallery-slide image-gallery-center"
                                        role="button"
                                        style="
                                            display: inherit;
                                            transform: translate3d(
                                                0%,
                                                0px,
                                                0px
                                            );
                                        "
                                    >
                                        <img
                                            class="image-gallery-image"
                                            src="/assets/img/lol12.png"
                                            alt=""
                                            srcset=""
                                            height=""
                                            width=""
                                            sizes=""
                                            title=""
                                            loading="eager"
                                        />
                                    </div>
                                    <div
                                        aria-label="Go to Slide 2"
                                        tabindex="-1"
                                        class="image-gallery-slide image-gallery-right"
                                        role="button"
                                        style="
                                            display: inherit;
                                            transform: translate3d(
                                                100%,
                                                0px,
                                                0px
                                            );
                                        "
                                    >
                                        <img
                                            class="image-gallery-image"
                                            src="/assets/img/lol11.png"
                                            alt=""
                                            srcset=""
                                            height=""
                                            width=""
                                            sizes=""
                                            title=""
                                            loading="eager"
                                        />
                                    </div>
                                    <div
                                        aria-label="Go to Slide 3"
                                        tabindex="-1"
                                        class="image-gallery-slide"
                                        role="button"
                                        style="
                                            display: inherit;
                                            transform: translate3d(
                                                200%,
                                                0px,
                                                0px
                                            );
                                        "
                                    >
                                        <img
                                            class="image-gallery-image"
                                            src="/assets/img/school01.jpg"
                                            alt=""
                                            srcset=""
                                            height=""
                                            width=""
                                            sizes=""
                                            title=""
                                            loading="eager"
                                        />
                                    </div>
                                    <div
                                        aria-label="Go to Slide 4"
                                        tabindex="-1"
                                        class="image-gallery-slide"
                                        role="button"
                                        style="
                                            display: inherit;
                                            transform: translate3d(
                                                300%,
                                                0px,
                                                0px
                                            );
                                        "
                                    >
                                        <img
                                            class="image-gallery-image"
                                            src="/assets/img/school02.jpg"
                                            alt=""
                                            srcset=""
                                            height=""
                                            width=""
                                            sizes=""
                                            title=""
                                            loading="eager"
                                        />
                                    </div>
                                    <div
                                        aria-label="Go to Slide 5"
                                        tabindex="-1"
                                        class="image-gallery-slide"
                                        role="button"
                                        style="
                                            display: inherit;
                                            transform: translate3d(
                                                400%,
                                                0px,
                                                0px
                                            );
                                        "
                                    >
                                        <img
                                            class="image-gallery-image"
                                            src="/assets/img/school03.jpg"
                                            alt=""
                                            srcset=""
                                            height=""
                                            width=""
                                            sizes=""
                                            title=""
                                            loading="eager"
                                        />
                                    </div>
                                    <div
                                        aria-label="Go to Slide 6"
                                        tabindex="-1"
                                        class="image-gallery-slide image-gallery-left"
                                        role="button"
                                        style="
                                            display: inherit;
                                            transform: translate3d(
                                                -100%,
                                                0px,
                                                0px
                                            );
                                        "
                                    >
                                        <img
                                            class="image-gallery-image"
                                            src="/assets/img/exe-school.png"
                                            alt=""
                                            srcset=""
                                            height=""
                                            width=""
                                            sizes=""
                                            title=""
                                            loading="eager"
                                        />
                                    </div>
                                </div>
                            </div>
                            <button
                                type="button"
                                class="image-gallery-icon image-gallery-play-button"
                                aria-label="Play or Pause Slideshow"
                            >
                                <svg
                                    class="image-gallery-svg"
                                    xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                >
                                    <polygon
                                        points="5 3 19 12 5 21 5 3"
                                    ></polygon>
                                </svg></button
                            ><button
                                type="button"
                                class="image-gallery-icon image-gallery-fullscreen-button"
                                aria-label="Open Fullscreen"
                            >
                                <svg
                                    class="image-gallery-svg"
                                    xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                >
                                    <path
                                        d="M8 3H5a2 2 0 0 0-2 2v3m18 0V5a2 2 0 0 0-2-2h-3m0 18h3a2 2 0 0 0 2-2v-3M3 16v3a2 2 0 0 0 2 2h3"
                                    ></path>
                                </svg>
                            </button>
                        </div>
                        <div
                            class="image-gallery-thumbnails-wrapper image-gallery-thumbnails-bottom thumbnails-swipe-horizontal"
                        >
                            <div class="image-gallery-thumbnails">
                                <nav
                                    class="image-gallery-thumbnails-container"
                                    aria-label="Thumbnail Navigation"
                                    style="
                                        transform: translate3d(0px, 0px, 0px);
                                        transition: all 450ms ease-out 0s;
                                    "
                                >
                                    <button
                                        type="button"
                                        tabindex="0"
                                        aria-pressed="true"
                                        aria-label="Go to Slide 1"
                                        class="image-gallery-thumbnail active"
                                    >
                                        <span
                                            class="image-gallery-thumbnail-inner"
                                            ><img
                                                class="image-gallery-thumbnail-image"
                                                src="/assets/img/lol12.png"
                                        /></span></button
                                    ><button
                                        type="button"
                                        tabindex="0"
                                        aria-pressed="false"
                                        aria-label="Go to Slide 2"
                                        class="image-gallery-thumbnail"
                                    >
                                        <span
                                            class="image-gallery-thumbnail-inner"
                                            ><img
                                                class="image-gallery-thumbnail-image"
                                                src="/assets/img/lol11.png"
                                        /></span></button
                                    ><button
                                        type="button"
                                        tabindex="0"
                                        aria-pressed="false"
                                        aria-label="Go to Slide 3"
                                        class="image-gallery-thumbnail"
                                    >
                                        <span
                                            class="image-gallery-thumbnail-inner"
                                            ><img
                                                class="image-gallery-thumbnail-image"
                                                src="/assets/img/school01.jpg"
                                        /></span></button
                                    ><button
                                        type="button"
                                        tabindex="0"
                                        aria-pressed="false"
                                        aria-label="Go to Slide 4"
                                        class="image-gallery-thumbnail"
                                    >
                                        <span
                                            class="image-gallery-thumbnail-inner"
                                            ><img
                                                class="image-gallery-thumbnail-image"
                                                src="/assets/img/school02.jpg"
                                        /></span></button
                                    ><button
                                        type="button"
                                        tabindex="0"
                                        aria-pressed="false"
                                        aria-label="Go to Slide 5"
                                        class="image-gallery-thumbnail"
                                    >
                                        <span
                                            class="image-gallery-thumbnail-inner"
                                            ><img
                                                class="image-gallery-thumbnail-image"
                                                src="/assets/img/school03.jpg"
                                        /></span></button
                                    ><button
                                        type="button"
                                        tabindex="0"
                                        aria-pressed="false"
                                        aria-label="Go to Slide 6"
                                        class="image-gallery-thumbnail"
                                    >
                                        <span
                                            class="image-gallery-thumbnail-inner"
                                            ><img
                                                class="image-gallery-thumbnail-image"
                                                src="/assets/img/exe-school.png"
                                        /></span>
                                    </button>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div class="px-4 md:pl-10 col-span-1">
                <h1
                    class="font-bold text-2xl md:text-3xl text-gray-700 mt-8 text-center md:text-left"
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
                            <br /> {{ $t("mongoliaPage.text2_3") }}<br />
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-span-1 md:mt-12 md:p-8 p-4">
                <div
                    class="image-gallery image-gallery-using-mouse"
                    aria-live="polite"
                >
                    <div
                        class="image-gallery-content image-gallery-thumbnails-bottom"
                    >
                        <div
                            class="image-gallery-slide-wrapper image-gallery-thumbnails-bottom"
                        >
                            <button
                                type="button"
                                class="image-gallery-icon image-gallery-left-nav"
                                aria-label="Previous Slide"
                            >
                                <svg
                                    class="image-gallery-svg"
                                    xmlns="http://www.w3.org/2000/svg"
                                    viewBox="6 0 12 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="1"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                >
                                    <polyline
                                        points="15 18 9 12 15 6"
                                    ></polyline>
                                </svg></button
                            ><button
                                type="button"
                                class="image-gallery-icon image-gallery-right-nav"
                                aria-label="Next Slide"
                            >
                                <svg
                                    class="image-gallery-svg"
                                    xmlns="http://www.w3.org/2000/svg"
                                    viewBox="6 0 12 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="1"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                >
                                    <polyline
                                        points="9 18 15 12 9 6"
                                    ></polyline>
                                </svg>
                            </button>
                            <div class="image-gallery-swipe">
                                <div class="image-gallery-slides">
                                    <div
                                        aria-label="Go to Slide 1"
                                        tabindex="-1"
                                        class="image-gallery-slide image-gallery-center"
                                        role="button"
                                        style="
                                            display: inherit;
                                            transform: translate3d(
                                                0%,
                                                0px,
                                                0px
                                            );
                                        "
                                    >
                                        <img
                                            class="image-gallery-image"
                                            src="/assets/img/lol16.png"
                                            alt=""
                                            srcset=""
                                            height=""
                                            width=""
                                            sizes=""
                                            title=""
                                            loading="eager"
                                        />
                                    </div>
                                    <div
                                        aria-label="Go to Slide 2"
                                        tabindex="-1"
                                        class="image-gallery-slide image-gallery-right"
                                        role="button"
                                        style="
                                            display: inherit;
                                            transform: translate3d(
                                                100%,
                                                0px,
                                                0px
                                            );
                                        "
                                    >
                                        <img
                                            class="image-gallery-image"
                                            src="/assets/img/lol18.png"
                                            alt=""
                                            srcset=""
                                            height=""
                                            width=""
                                            sizes=""
                                            title=""
                                            loading="eager"
                                        />
                                    </div>
                                    <div
                                        aria-label="Go to Slide 3"
                                        tabindex="-1"
                                        class="image-gallery-slide"
                                        role="button"
                                        style="
                                            display: inherit;
                                            transform: translate3d(
                                                200%,
                                                0px,
                                                0px
                                            );
                                        "
                                    >
                                        <img
                                            class="image-gallery-image"
                                            src="/assets/img/lol17.png"
                                            alt=""
                                            srcset=""
                                            height=""
                                            width=""
                                            sizes=""
                                            title=""
                                            loading="eager"
                                        />
                                    </div>
                                    <div
                                        aria-label="Go to Slide 4"
                                        tabindex="-1"
                                        class="image-gallery-slide"
                                        role="button"
                                        style="
                                            display: inherit;
                                            transform: translate3d(
                                                300%,
                                                0px,
                                                0px
                                            );
                                        "
                                    >
                                        <img
                                            class="image-gallery-image"
                                            src="/assets/img/lol19.png"
                                            alt=""
                                            srcset=""
                                            height=""
                                            width=""
                                            sizes=""
                                            title=""
                                            loading="eager"
                                        />
                                    </div>
                                    <div
                                        aria-label="Go to Slide 5"
                                        tabindex="-1"
                                        class="image-gallery-slide"
                                        role="button"
                                        style="
                                            display: inherit;
                                            transform: translate3d(
                                                400%,
                                                0px,
                                                0px
                                            );
                                        "
                                    >
                                        <img
                                            class="image-gallery-image"
                                            src="/assets/img/finance.png"
                                            alt=""
                                            srcset=""
                                            height=""
                                            width=""
                                            sizes=""
                                            title=""
                                            loading="eager"
                                        />
                                    </div>
                                    <div
                                        aria-label="Go to Slide 6"
                                        tabindex="-1"
                                        class="image-gallery-slide image-gallery-left"
                                        role="button"
                                        style="
                                            display: inherit;
                                            transform: translate3d(
                                                -100%,
                                                0px,
                                                0px
                                            );
                                        "
                                    >
                                        <img
                                            class="image-gallery-image"
                                            src="/assets/img/value.png"
                                            alt=""
                                            srcset=""
                                            height=""
                                            width=""
                                            sizes=""
                                            title=""
                                            loading="eager"
                                        />
                                    </div>
                                </div>
                            </div>
                            <button
                                type="button"
                                class="image-gallery-icon image-gallery-play-button"
                                aria-label="Play or Pause Slideshow"
                            >
                                <svg
                                    class="image-gallery-svg"
                                    xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                >
                                    <polygon
                                        points="5 3 19 12 5 21 5 3"
                                    ></polygon>
                                </svg></button
                            ><button
                                type="button"
                                class="image-gallery-icon image-gallery-fullscreen-button"
                                aria-label="Open Fullscreen"
                            >
                                <svg
                                    class="image-gallery-svg"
                                    xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                >
                                    <path
                                        d="M8 3H5a2 2 0 0 0-2 2v3m18 0V5a2 2 0 0 0-2-2h-3m0 18h3a2 2 0 0 0 2-2v-3M3 16v3a2 2 0 0 0 2 2h3"
                                    ></path>
                                </svg>
                            </button>
                        </div>
                        <div
                            class="image-gallery-thumbnails-wrapper image-gallery-thumbnails-bottom thumbnails-swipe-horizontal"
                        >
                            <div class="image-gallery-thumbnails">
                                <nav
                                    class="image-gallery-thumbnails-container"
                                    aria-label="Thumbnail Navigation"
                                    style="
                                        transform: translate3d(0px, 0px, 0px);
                                        transition: all 450ms ease-out 0s;
                                    "
                                >
                                    <button
                                        type="button"
                                        tabindex="0"
                                        aria-pressed="true"
                                        aria-label="Go to Slide 1"
                                        class="image-gallery-thumbnail active"
                                    >
                                        <span
                                            class="image-gallery-thumbnail-inner"
                                            ><img
                                                class="image-gallery-thumbnail-image"
                                                src="/assets/img/lol16.png"
                                        /></span></button
                                    ><button
                                        type="button"
                                        tabindex="0"
                                        aria-pressed="false"
                                        aria-label="Go to Slide 2"
                                        class="image-gallery-thumbnail"
                                    >
                                        <span
                                            class="image-gallery-thumbnail-inner"
                                            ><img
                                                class="image-gallery-thumbnail-image"
                                                src="/assets/img/lol18.png"
                                        /></span></button
                                    ><button
                                        type="button"
                                        tabindex="0"
                                        aria-pressed="false"
                                        aria-label="Go to Slide 3"
                                        class="image-gallery-thumbnail"
                                    >
                                        <span
                                            class="image-gallery-thumbnail-inner"
                                            ><img
                                                class="image-gallery-thumbnail-image"
                                                src="/assets/img/lol17.png"
                                        /></span></button
                                    ><button
                                        type="button"
                                        tabindex="0"
                                        aria-pressed="false"
                                        aria-label="Go to Slide 4"
                                        class="image-gallery-thumbnail"
                                    >
                                        <span
                                            class="image-gallery-thumbnail-inner"
                                            ><img
                                                class="image-gallery-thumbnail-image"
                                                src="/assets/img/lol19.png"
                                        /></span></button
                                    ><button
                                        type="button"
                                        tabindex="0"
                                        aria-pressed="false"
                                        aria-label="Go to Slide 5"
                                        class="image-gallery-thumbnail"
                                    >
                                        <span
                                            class="image-gallery-thumbnail-inner"
                                            ><img
                                                class="image-gallery-thumbnail-image"
                                                src="/assets/img/finance.png"
                                        /></span></button
                                    ><button
                                        type="button"
                                        tabindex="0"
                                        aria-pressed="false"
                                        aria-label="Go to Slide 6"
                                        class="image-gallery-thumbnail"
                                    >
                                        <span
                                            class="image-gallery-thumbnail-inner"
                                            ><img
                                                class="image-gallery-thumbnail-image"
                                                src="/assets/img/value.png"
                                        /></span>
                                    </button>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "Mongolia",
};
</script>
