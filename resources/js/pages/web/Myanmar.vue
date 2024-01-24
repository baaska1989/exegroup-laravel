<template>
    <div
        class="relative overflow-hidden bg-cover bg-no-repeat h-[16rem] md:h-[20rem] lg:h-[28rem]"
        style="margin-top: 120px;
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
                <h1 class="mb-6 text-2xl md:text-4xl font-bold">
                    {{ $t('myanmarPage.head_title') }}
                </h1>
            </div>
        </div>
    </div>

    <div class="max-w-[1200px] mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div class="px-4 md:pl-5 col-span-1">
                <h1
                    class="font-bold text-2xl md:text-3xl text-gray-700 mt-8 text-center md:text-left"
                >
                {{ $t('myanmarPage.title1') }}
                </h1>
                <div class="lg:flex block">
                    <div class="flex text-left">
                        <div
                            class="text-lg font-medium w-auto lg:h-auto md:py-4 pb-8 text-gray-500 max-w-4xl indent-4"
                        >
                            <p>
                                サクラタワーは（株）日本設計、（株）鴻池組と、日本企業の手で1999年に完成しました。ヤンゴンのビジネス及び政治のまさに中心地区に位置し、総貸室面積12,425㎡、高さは地上約100mの20階建て耐震設計オフィスビルです。
                            </p>
                            <br />
                            <p>
                                地上1階～3階は総貸室面積1,183㎡の小売業エリアと
                                なっており、主要航空会社のチケットオフィスや旅行代理店、歯医者、ショールームなどが入居しています
                            </p>
                            <br />5階から19階にはJICA、三菱商事、日経、NHK等、グローバルに活躍する企業や団体が入居しています。<br /><br />Address:
                            339 Bogyoke Aung San Road, Kyauktada Township,
                            Yangon, Myanmar<br />Tel: (95 1) 255 255<br />E-mail:
                            stowersales@myanmar.com.mm<br />
                            Website:<a href="http://www.sakura-tower-yangon.com"
                                >http://www.sakura-tower-yangon.com</a
                            >
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
                                        class="image-gallery-slide image-gallery-left"
                                        role="button"
                                        style="
                                            display: inherit;
                                            transform: translate3d(
                                                -100%,
                                                0px,
                                                0px
                                            );
                                            transition: all 450ms ease-out 0s;
                                        "
                                    >
                                        <img
                                            class="image-gallery-image"
                                            src="/assets/img/lol10.jpg"
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
                                        class="image-gallery-slide image-gallery-center"
                                        role="button"
                                        style="
                                            display: inherit;
                                            transform: translate3d(
                                                0%,
                                                0px,
                                                0px
                                            );
                                            transition: all 450ms ease-out 0s;
                                        "
                                    >
                                        <img
                                            class="image-gallery-image"
                                            src="/assets/img/lol6.jpg"
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
                                        class="image-gallery-slide image-gallery-right"
                                        role="button"
                                        style="
                                            display: inherit;
                                            transform: translate3d(
                                                100%,
                                                0px,
                                                0px
                                            );
                                            transition: all 450ms ease-out 0s;
                                        "
                                    >
                                        <img
                                            class="image-gallery-image"
                                            src="/assets/img/lol7.jpg"
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
                                                200%,
                                                0px,
                                                0px
                                            );
                                            transition: all 450ms ease-out 0s;
                                        "
                                    >
                                        <img
                                            class="image-gallery-image"
                                            src="/assets/img/lol8.jpg"
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
                                                300%,
                                                0px,
                                                0px
                                            );
                                            transition: all 450ms ease-out 0s;
                                        "
                                    >
                                        <img
                                            class="image-gallery-image"
                                            src="/assets/img/lol9.jpg"
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
                                        transform: translate3d(-2px, 0px, 0px);
                                        transition: all 450ms ease-out 0s;
                                    "
                                >
                                    <button
                                        type="button"
                                        tabindex="0"
                                        aria-pressed="false"
                                        aria-label="Go to Slide 1"
                                        class="image-gallery-thumbnail"
                                    >
                                        <span
                                            class="image-gallery-thumbnail-inner"
                                            ><img
                                                class="image-gallery-thumbnail-image"
                                                src="/assets/img/lol10.jpg"
                                        /></span></button
                                    ><button
                                        type="button"
                                        tabindex="0"
                                        aria-pressed="true"
                                        aria-label="Go to Slide 2"
                                        class="image-gallery-thumbnail active"
                                    >
                                        <span
                                            class="image-gallery-thumbnail-inner"
                                            ><img
                                                class="image-gallery-thumbnail-image"
                                                src="/assets/img/lol6.jpg"
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
                                                src="/assets/img/lol7.jpg"
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
                                                src="/assets/img/lol8.jpg"
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
                                                src="/assets/img/lol9.jpg"
                                        /></span>
                                    </button>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="px-5">
            <div
                class="text-2xl md:text-3xl font-bold box-content w-auto p-2 border-0 bg-[#f6fafd] my-4 text-gray-700"
            >
                設備
                <div class="grid grid-cols-1 md:grid-cols-2">
                    <div
                        class="font-normal mt-4 text-base text-gray-500 col-span-1"
                    >
                        24時間フルバックアップの自家発電システム<br />-
                        &nbsp;24時間体制の監視カメラと警備員による24時間保守警備<br />-
                        &nbsp;OA機器用床下配線<br />-
                        &nbsp;高い国際基準に合わせて設計された耐震性<br />-
                        &nbsp;火災報知機、スプリンクラー、避難口を各階に設置<br />-
                        &nbsp;専用インターネットアクセス
                    </div>
                    <div
                        class="font-normal text-base mt-4 text-gray-500 col-span-1"
                    >
                        -
                        &nbsp;4基のハイスピードエレベーター（日立製、三菱電機製）<br />-
                        &nbsp;貨物専用エレベーター<br />-
                        &nbsp;44台収容可能な機械式パーキングシステム<br />-
                        &nbsp;IDD電話<br />- &nbsp;衛星テレビ、ケーブルテレビ<br />-
                        &nbsp;電話回線：400回線
                    </div>
                </div>
            </div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2">
            <div class="px-4 md:pl-10 col-span-1">
                <h1
                    class="font-bold text-2xl md:text-3xl text-gray-700 text-center md:text-left py-2"
                >
                    サクラレジデンス
                </h1>
                <div class="lg:flex block">
                    <div class="flex text-justify">
                        <div
                            class="text-lg font-medium w-auto lg:h-auto md:py-4 text-gray-500 max-w-4xl py-4 pb-8 indent-4"
                        >
                            サクラレジデンスは、1998年にヤンゴンで最初に作られた海外駐在員向けの世界水準のサービスを備えた高級サービスアパートメントであり、1泊からもご利用いただける高級ホテルでもあります。閑静な住宅地やインヤ通りのヤシ並木に程近い場所に位置し、ヤンゴン国際空港やビジネス街からほんの数分という好立地にあります。<br /><br />レジデンス内からは、黄金に輝くシュエダゴンパゴダの素晴らしい景色をご覧頂けます。<br /><br />
                            <p>
                                サクラレジデンスは、お客様が訪れた瞬間から「我が家」と呼ぶに相応しい、ワンルームから広々とした3ベッドルームまでの261室の家具付きのお部屋、広く開放的な庭園やプール、美味しい料理をいつでも味わうことのできるレストラン「カフェ・ティリピセヤ」等、リラックスして快適にお過ごしいただける各種サービスをご用意しています。
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
                                            src="/assets/img/lol5.jpg"
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
                                            src="/assets/img/lol4.jpg"
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
                                            src="/assets/img/lol3.jpg"
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
                                            src="/assets/img/lol1.jpg"
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
                                            src="/assets/img/lol2.jpg"
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
                                                src="/assets/img/lol5.jpg"
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
                                                src="/assets/img/lol4.jpg"
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
                                                src="/assets/img/lol3.jpg"
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
                                                src="/assets/img/lol1.jpg"
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
                                                src="/assets/img/lol2.jpg"
                                        /></span>
                                    </button>
                                </nav>
                            </div>
                        </div>
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
                        設備
                        <div
                            class="font-normal text-base mt-5 block text-gray-500 pb-5"
                        >
                            24時間体制のセキュリティとメンテナンス<br />-
                            &nbsp;コンシェルジュサービス<br />-
                            &nbsp;毎日のハウスキーピングサービス<br />-
                            &nbsp;スイミングプール、フィットネスセンター<br />-
                            &nbsp;レストラン、バー、バーベキューテラス<br />-
                            &nbsp;キッズルーム<br />- &nbsp;ルームサービス<br />-
                            &nbsp;小会議室<br />- &nbsp;ビジネスセンター<br />&nbsp;（各部屋からのインターネットアクセスも可能
                            ※ 要契約）<br />- &nbsp;屋根付き駐車場完備<br />-
                            &nbsp;車での送迎サービス<br />-
                            &nbsp;コンビニエンスストア<br />
                        </div>
                    </div>
                    <div
                        class="col-span-1 text-gray-700 sm:mt-5 lg:mt-0 md:mt-0"
                    >
                        調度品
                        <div class="font-normal text-base mt-5 text-gray-500">
                            - &nbsp;個別操作可能な空調設備<br />-
                            &nbsp;IDD電話<br />-
                            &nbsp;専用インターネットアクセス<br />-
                            &nbsp;多チャンネル衛星放送<br />- &nbsp;金庫<br />-
                            &nbsp;4口調理台、電動湯沸かし器<br />-
                            &nbsp;&nbsp;各種家電（洗濯乾燥機、冷凍冷蔵庫、炊飯器、オーブ
                            ン機能付き電子レンジ、トースター、電気ポット、コー
                            ヒーメーカー、アイロン、ヘア･ドライヤー、ビデオ、小型ステレオ）
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</template>

<script>
// import { VueAgile } from 'vue-agile';
export default {
    name: "Myanmar",

    // components: {
    //     agile: VueAgile
    // },
    // data () {
	// 	return {
	// 		asNavFor1: [],
	// 		asNavFor2: [],
	// 		options1: {
	// 			dots: false,
	// 			fade: true,
	// 			navButtons: false
	// 		},
	//
	// 		options2: {
	// 			autoplay: true,
	// 			centerMode: true,
	// 			dots: false,
	// 			navButtons: false,
	// 			slidesToShow: 3,
	// 			responsive: [
    //             {
    //                 breakpoint: 600,
    //                 settings: {
    //                     slidesToShow: 5
    //                 }
    //             },
    //
    //             {
    //                 breakpoint: 1000,
    //                 settings: {
    //                     navButtons: true
    //                 }
    //             }
    //         ]
	//
	// 		},
	//
	// 		slides: [
	// 				'https://images.unsplash.com/photo-1453831362806-3d5577f014a4?ixlib=rb-1.2.1&q=85&fm=jpg&crop=entropy&cs=srgb&w=1600&fit=max&ixid=eyJhcHBfaWQiOjE0NTg5fQ',
	// 				'https://images.unsplash.com/photo-1496412705862-e0088f16f791?ixlib=rb-1.2.1&q=85&fm=jpg&crop=entropy&cs=srgb&w=1600&fit=max&ixid=eyJhcHBfaWQiOjE0NTg5fQ',
	// 				'https://images.unsplash.com/photo-1506354666786-959d6d497f1a?ixlib=rb-1.2.1&q=85&fm=jpg&crop=entropy&cs=srgb&w=1600&fit=max&ixid=eyJhcHBfaWQiOjE0NTg5fQ',
	// 				'https://images.unsplash.com/photo-1455619452474-d2be8b1e70cd?ixlib=rb-1.2.1&q=85&fm=jpg&crop=entropy&cs=srgb&w=1600&fit=max&ixid=eyJhcHBfaWQiOjE0NTg5fQ',
	// 				'https://images.unsplash.com/photo-1504674900247-0877df9cc836?ixlib=rb-1.2.1&q=85&fm=jpg&crop=entropy&cs=srgb&w=1600&fit=max&ixid=eyJhcHBfaWQiOjE0NTg5fQ',
	// 				'https://images.unsplash.com/photo-1472926373053-51b220987527?ixlib=rb-1.2.1&q=85&fm=jpg&crop=entropy&cs=srgb&w=1600&fit=max&ixid=eyJhcHBfaWQiOjE0NTg5fQ',
	// 				'https://images.unsplash.com/photo-1497534547324-0ebb3f052e88?ixlib=rb-1.2.1&q=85&fm=jpg&crop=entropy&cs=srgb&w=1600&fit=max&ixid=eyJhcHBfaWQiOjE0NTg5fQ'
	// 			]
	// 	}
	// },
	// mounted () {
	// 	this.asNavFor1.push(this.$refs.thumbnails)
	// 	this.asNavFor2.push(this.$refs.main)
	// }
};
</script>
<!-- <style lang="sass" scoped>
.main {
    margin-bottom: 30px
}


.thumbnails {
	margin: 0 -5px;
	width: calc(100% + 10px)
}


// Basic VueAgile styles
.agile {
    &__nav-button
		background: transparent
		border: none
		color: #ccc
		cursor: pointer
		font-size: 24px
		transition-duration: .3s

		.thumbnails &
			position: absolute
			top: 50%
			transform: translateY(-50%)

			&--prev
				left: -45px

			&--next
				right: -45px

		&:hover
			color: #888

	&__dot
		margin: 0 10px

		button
			background-color: #eee
			border: none
			border-radius: 50%
			cursor: pointer
			display: block
			height: 10px
			font-size: 0
			line-height: 0
			margin: 0
			padding: 0
			transition-duration: .3s
			width: 10px

		&--current,
		&:hover
			button
				background-color: #888
}


// Slides styles
.slide {
	align-items: center
	box-sizing: border-box
	color: #fff
	display: flex
	height: 450px
	justify-content: center

	&--thumbniail
		cursor: pointer
		height: 100px
		padding: 0 5px
		transition: opacity .3s

		&:hover
			opacity: .75
}


	img {
        height: 100%;
		object-fit: cover;
		object-position: center;
		width: 100%;
    }
</style> -->
