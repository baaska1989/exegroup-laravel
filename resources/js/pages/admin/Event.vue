<template>
    <div class="flex items-center mt-8 intro-y">
        <h2 class="mr-auto pl-5 text-lg font-medium">Events</h2>
          <div class="flex items-center w-full mt-3 xl:w-auto xl:mt-0">
        <button class="mr-2 shadow-md p-2" @click="newShop()" >
          <Lucide icon="FileText" class="w-4 h-4 mr-2" /> New Event
        </button>

      </div>
    </div>
    <div class="p-5 mt-5 intro-y box">
        <div class="col-span-12 overflow-auto intro-y 2xl:overflow-visible">
            <table class="w-full text-left border-spacing-y-[10px] border-separate sm:mt-2">
                <thead>
                    <th>#</th>
                    <th>Event name</th>
                    <th>Эхлэх дугаар</th>
                    <th>Хаяг</th>
                    <th>Үйлдэл</th>
                </thead>
                <tbody>
                    <tr v-for="(item, index) in shops">
                        <td class="first:rounded-l-md last:rounded-r-md w-10 bg-white border-b-0 dark:bg-darkmode-600 shadow-[20px_3px_20px_#0000000b]">{{ ++index }}</td>
                        <td class="first:rounded-l-md last:rounded-r-md bg-white border-b-0 dark:bg-darkmode-600 shadow-[20px_3px_20px_#0000000b]">{{ item.name }}</td>
                        <td class="first:rounded-l-md last:rounded-r-md bg-white border-b-0 dark:bg-darkmode-600 shadow-[20px_3px_20px_#0000000b]">{{ item.prefix }}</td>
                        <td class="first:rounded-l-md last:rounded-r-md bg-white border-b-0 dark:bg-darkmode-600 shadow-[20px_3px_20px_#0000000b]">{{ item.shop_address }}</td>
                        <td>

                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</template>

<script>
export default {
    name: "Shops",
    data() {
        return {
            shops: [],
            value: false,
            event_loading: false
        };
    },
    created() {
        this.getShops();
    },
    methods: {
        getShops(){
            axios
                .get("/api/getEvents")
                .then(({ data }) => {
                    this.shops = data.data;
                })
                .catch((err) => {
                    console.log(err)
                });
        },
        saveShop(){
        axios.post('/api/saveEvent', {})
       },

        newShop(){
            
        },

    },

    mounted() {
        document.title = "Event card"
    }
};
</script>

<style scoped></style>
