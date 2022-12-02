<template src="./Catalogue.html"></template>
<style src="./Catalogue.scss" lang="scss" scoped>

</style>

<script lang="ts">
import { Options, Vue } from 'vue-class-component';
import { storeKey, useStore } from 'vuex'
import { key } from '@/store'
import axios from 'axios'
import ItemCard from './ItemCard/ItemCard.vue'
@Options({
    props: {},
    components: {
        ItemCard
    }
})
export default class Catalogue extends Vue {
    list: any[] = [] 

    async mounted() {
        await axios.post(
            'https://otakuworld.org/BackOtakuWorld/SiteAbdelTmp/Items.php',
            {
                Mode: "Fetch",
            },
        ).then((response) => {
            this.list = (response.data as any[])
        }).catch(function (error) {
            console.log(error)
        });
    }
}
</script>