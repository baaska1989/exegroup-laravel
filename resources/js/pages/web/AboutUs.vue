<template>
    <div
        class="relative overflow-hidden bg-cover bg-no-repeat h-[16rem] md:h-[20rem] lg:h-[28rem]"
        style="margin-top: 120px;
            background-position: 50% center;
            background-image: url('/assets/img/mv.jpg');
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
                    {{ $t("aboutPage.about") }}
                </h1>
            </div>
        </div>
    </div>
    <div class="max-w-[1200px] mx-auto">
        <div class="px-4 about-text">
            <p class="text-center text-lg font-medium text-gray-500 pt-6">
                私ども、株式会社エクセは1991年8月6日に生まれました。
                それから20年、20世紀の最後の10年と21世紀の最初の10年の激動の中をブティックの投資事業会社として、時代の流れとともに前へ前へと進んでまいりました。
            </p>
            <h2
                class="text-center mt-8 underline underline-offset-4 font-bold text-2xl md:text-3xl text-gray-700 my-4"
            >
                変化こそチャンスである
            </h2>
            <p class="text-center text-lg font-medium text-gray-500 mt-4">
                当社が常に掲げてきた信念は、「変化こそチャンスである」ということです。<br /><br />時代の変化にたじろぐことなく、不安定化をむしろビジネスチャンスと捉えていくのが当社のスピリットです。そして投資にあたっては、真に社会が必要としているものは何なのかを見据え、世の中の大勢がなびく「今」に乗るのではなく、時代の「これから」を見つけ出してそこに投資をし、事業を起こし、更に育てていくことを基本的な方針としております。<br /><br />
                この信念が結実したものが、ここでご紹介する国内及びアジアを中心とするプロジェクトです。当社は、ミャンマー、モンゴル、イスラエルなどで数多くのプロジェクトを完成・運営し、雇用を通じてこれらの国々のお手伝いをさせていただいております。
            </p>
            <h2
                class="text-center mt-8 underline underline-offset-4 font-bold text-2xl md:text-3xl text-gray-700 my-4"
            >
                人材へのこだわり
            </h2>
            <p class="text-center text-lg font-medium text-gray-500 mb-8">
                当社が常に掲げてきた信念は、「変化こそチャンスである」ということです。<br /><br />当社は人材への投資こそ最高の投資であると考えて、「自ら変化を求める人材」、「人と同じではなく自分なりの価値観を持っている人材」を常に求めております。<br /><br />
                安定した人生を求めるより、当社をステップに将来は独立して経営者を目指そうとするような人材を歓迎いたします。やる気のある若者を支援するために、当社は海外インターンシップを含めた実践研修の場も提供しております。<br /><br />
                ユニークな投資事業会社として常に前進を続ける当社のことを是非知っていただき、応援していただきますようお願いいたします。
            </p>
            <p class="text-end text-lg font-medium text-gray-500">
                2017年9月吉日
            </p>
            <p class="text-end text-lg font-medium text-gray-500 mb-8 md:mb-0">
                代表取締役社長 谷 均
            </p>
        </div>
        <div class="grid justify-center about-text text-gray-500 px-4">
            <div class="md:mt-20 border-2 border-black bg-darkblue h-14">
                <p class="text-center text-lg font-medium mt-3 text-white">
                    会社概要
                </p>
            </div>
            <div
                class="items-center divide-black grid grid-cols-3 justify-center divide-x border-t-2 border-r-2 border-l-2 border-t-black border-r-black border-l-black"
            >
                <div class="text-center font-medium m-3">企業名</div>
                <div class="col-span-2 p-4">
                    株式会社エクセ（英文表記：EXE Corporation)
                </div>
            </div>
            <div
                class="items-center divide-black grid grid-cols-3 divide-x border-t-2 border-r-2 border-l-2 border-t-black border-r-black border-l-black"
            >
                <div class="text-center font-medium m-3">代表取締役社長</div>
                <div class="col-span-2 p-4">谷　均</div>
            </div>
            <div
                class="items-center divide-black grid grid-cols-3 divide-x border-t-2 border-r-2 border-l-2 border-t-black border-r-black border-l-black"
            >
                <div class="text-center font-medium md:m-6">所在地</div>
                <div class="col-span-2 p-4">
                    東京都千代田区麹町四丁目８番地19キャトルセゾン麹町５階
                </div>
            </div>
            <div
                class="items-center divide-black grid grid-cols-3 divide-x border-t-2 border-r-2 border-l-2 border-t-black border-r-black border-l-black"
            >
                <div class="text-center font-medium">海外事業所</div>
                <div class="col-span-2 p-4">
                    ヤンゴン・オフィス（ミャンマー）<br />#0505 Sakura Tower,
                    339 Bogyoke Aung San Road, Kyauktada Township, Yangon,
                    Myanmar<br />Tel: (951) 255 255<br />Fax: (951) 255 258
                    <br /><span class="">E-mail: </span
                    ><a class="" style="font-size: 13px"
                        >stowersales@myanmar.com.mm</a
                    ><br />ウランバートル・オフィス（モンゴル）<br />Tumurchin
                    Avenue 7/1, Chingeltei District, Ulaanbaatar 15171
                    Mongolia<br />Tel: (976) 9999 8306 <br />E-mail:
                    info@exe.edu.mn
                </div>
            </div>
            <div
                class="items-center divide-black grid grid-cols-3 divide-x border-t-2 border-r-2 border-l-2 border-t-black border-r-black border-l-black"
            >
                <div class="text-center font-medium">資本金</div>
                <div class="col-span-2 p-4">99,000,000円</div>
            </div>
            <div
                class="items-center divide-black grid grid-cols-3 divide-x border-t-2 border-r-2 border-l-2 border-t-black border-r-black border-l-black"
            >
                <div class="text-center font-medium">事業内容</div>
                <div class="col-span-2 p-4">
                    日本を含むアジアを中心とする投資および事業
                </div>
            </div>
            <div
                class="items-center divide-black grid grid-cols-3 divide-x border-t-2 border-r-2 border-l-2 border-t-black border-r-black border-l-black"
            >
                <div class="text-center font-medium">従業員</div>
                <div class="col-span-2 p-4">
                    約10人（本社）、約300人（海外グループ会社）
                </div>
            </div>
            <div
                class="items-center divide-black grid grid-cols-3 divide-x border-t-2 border-r-2 border-l-2 border-b-2 border-t-black border-r-black border-l-black border-b-black"
            >
                <div class="text-center font-medium">関連会社</div>
                <div class="col-span-2 p-4">
                    EXE Sakura
                    tower(シンガポール）：ミャンマー（ヤンゴン）におけるサクラタワーの経営<br />EXE
                    Sakura
                    Residence(シンガポール）：ミャンマー（ヤンゴン）におけるサクラレジデンスの経営<br />Sakura
                    Thiripyitsaya（シンガポール）：ミャンマー（バガン）におけるティリピセヤ・サンクチュアリ・リゾートの経営<br />Sanaa
                    EXE LLC（モンゴル）：ウランバートルにおける投資会社<br />Turquoise
                    Finance（モンゴル）：ノンバンク<br />Olonlog
                    EXE（モンゴル）：ITスクール<br />
                </div>
            </div>
        </div>
        <div
            class="grid justify-center mt-10 mb-10 about-text px-4 text-gray-500"
        >
            <div class="md:mt-20 border-2 border-black bg-darkblue h-14">
                <p class="text-center text-lg font-medium text-white mt-3">
                    沿革
                </p>
            </div>
            <div
                class="items-center divide-black grid grid-cols-3 justify-center divide-x border-t-2 border-r-2 border-l-2 border-t-black border-r-black border-l-black"
            >
                <div class="text-center font-medium">1991年</div>
                <div class="col-span-2 p-4">
                    三菱商事㈱を退社後、投資事業会社の株式会社エクセを設立
                    <br />日本テレコムと共同で日本初の携帯電話事業会社を設立
                </div>
            </div>
            <div
                class="items-center divide-black grid grid-cols-3 divide-x border-t-2 border-r-2 border-l-2 border-t-black border-r-black border-l-black"
            >
                <div class="text-center font-medium">1998年</div>
                <div class="col-span-2 p-4">
                    ベトナムにて日本初のホテル事業を展開（現ホテル・ニッコー・ハノイ）
                </div>
            </div>
            <div
                class="items-center divide-black grid grid-cols-3 divide-x border-t-2 border-r-2 border-l-2 border-t-black border-r-black border-l-black"
            >
                <div class="text-center font-medium">1999年</div>
                <div class="col-span-2 p-4">
                    ミャンマーにて日本初のオフィスビル・ホテル事業を展開（現サクラタワー、ティリピセヤ・サンクチュアリ・リゾート）
                </div>
            </div>
            <div
                class="items-center divide-black grid grid-cols-3 divide-x border-t-2 border-r-2 border-l-2 border-t-black border-r-black border-l-black"
            >
                <div class="text-center font-medium">2010年</div>
                <div class="col-span-2 p-4">
                    モンゴルにて日本初の投資事業会社Sanaa EXE LLCを設立
                </div>
            </div>
            <div
                class="items-center divide-black grid grid-cols-3 divide-x border-t-2 border-r-2 border-l-2 border-t-black border-r-black border-l-black"
            >
                <div class="text-center font-medium">2014年</div>
                <div class="col-span-2 p-4">
                    イスラエルにて日本初の投資・不動産事業会社Cardboard
                    Technologiesを設立
                </div>
            </div>
            <div
                class="items-center divide-black grid grid-cols-3 divide-x border-t-2 border-r-2 border-l-2 border-t-black border-b-2 border-b-black border-r-black border-l-black"
            >
                <div class="text-center font-medium">2016年</div>
                <div class="col-span-2 p-4">
                    モンゴルにて教育事業会社Olonlog
                    EXEを設立、教育事業へと展開を広げる
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "AboutUs",
    data() {
        return {};
    },

    created() {},
    methods: {},

    mounted() {
        document.title = "About Us";
    },
};
</script>
