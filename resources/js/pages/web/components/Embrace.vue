<template>
    <section id="demo" class="container relative rounded-lg" style="overflow: hidden;">
            <div class="py-5">
                <div class="relative z-30 text-white">
                    <div style="height: 500px;"
                        class="grid lg:grid-cols-2 md:grid-cols-2 grid-cols-2 gap-6 mt-0 overflow-hidden"
                    >
                        <div class="p-2">
                            <div class="p-4 rounded-md">
                                <div class="text-white text-center">
                                    <h2
                                        class="sm:text-xl md:text-2xl text-between lg:text-4xl font-semibold"
                                    >
                                        Embrace th Tranquility of Conscios
                                        Breath
                                    </h2>
                                    <p class="text-base text-left mt-3">
                                        In the gentle rhythm of conscious
                                        breathing, a profound transformation
                                        unfolds. Within minutes, it brings
                                        harmony to your physical, emotional, and
                                        mental realms. Yet, its true enchantment
                                        emerges with dedication.
                                    </p>
                                    <p class="text-base text-left mt-3">
                                        Step into the world of Conscious
                                        Connected Breathing, where serenity
                                        meets revitalization, and higher states
                                        of consciousness lead to a life of
                                        tranquil abundance.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="p-2"
                            style="
                                max-height: 80% !important;
                                overflow: hidden !important;
                            "
                        >
                            <div class="rounded-md">
                                <div class="text-white text-center">
                                    <marquee style="height: 340px "
                                        class=""
                                        direction="up"
                                        scrollamount="5"
                                    >
                                        <TimeLine />
                                    </marquee>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <div class="absolute inset-0">
                    <video autoplay loop muted>
                        <source
                            src="/assets/WEAVER-ANIMATION.mov"
                            type="video/mp4"
                        />
                    </video>
                </div>
            </div>
    </section>
</template>
<script>
import TimeLine from "./TimeLine.vue";
export default {
    components: { TimeLine },
};
</script>
