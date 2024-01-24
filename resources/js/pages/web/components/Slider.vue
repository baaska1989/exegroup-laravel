<template>
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
</template>