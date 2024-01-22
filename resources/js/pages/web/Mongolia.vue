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
                    Olonlog EXE IT 学校 <br />（オロンログ・エクセ）
                </h1>
                <div class="lg:flex block">
                    <div class="flex text-left">
                        <div
                            class="text-lg font-medium w-auto lg:h-auto md:py-4 pb-8 text-gray-500 max-w-4xl py-4 indent-4"
                        >
                            2010
                            年からモンゴルの教育現場を支援し、総生徒数3,500人の校舎ビル建設プロジェクトを実行し、2018年にモンゴル初のITカリキュラムを小学生から教えるOlonlog
                            EXE
                            IT学校（オロンログ・エクセ）を設立し現在運営をしています。小学校1年生から高校生まで500人近くの優秀な生徒が通い、デジタル時代のモンゴルのパワーになるために勤勉に勉強をしています。<br /><br />
                            <p>
                                設立以来、IT、数学、英語の全国大会やウランバートル市の大会などで毎年数多くのメダルを獲得しており、教育機関からの全額奨学金を受け米国、カナダ、日本へ留学する生徒も輩出しています。本校の生徒たちは、モンゴルだけでなく、世界をリードする国際的にトップ・レベルのプロフェッショナルになれると信じています。
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
                    ターコイズ・ファイナンス
                </h1>
                <div class="lg:flex block">
                    <div class="flex text-justify">
                        <div
                            class="text-lg font-medium w-auto lg:h-auto md:py-4 pb-8 text-gray-500 max-w-4xl py-4 indent-4"
                        >
                            <p>
                                株式会社エクセは、モンゴル最大手証券会社であるBDSec
                                JSCの機関投資家大株主の一つであり、役員会に取締役も務めています。
                            </p>
                            <br />
                            <p>
                                モンゴル金融庁の免許を受けた金融サービス会社である現地法人子会社であるターコイズ・ファイナンスを通じて、モンゴル証券取引所や店頭市場における株式・債券の引受を行うなど、BDSecと共にモンゴルの金融市場で事業を行っています。
                            </p>
                            <br />引受業務以外に、ターコイズ・ファイナンスは現地の事業法人に直接ローンを発行し、非銀行部門の金融市場のマーケット・メーカーとしての役割も果たしています。<br />
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
