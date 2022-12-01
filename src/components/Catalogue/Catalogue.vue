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
   list = [{name:"vin", price:250, description:"test"},{name:"jus d orange", price:10, description:"test"},{name:"vodka", price:2500, description:"test"}]
}
</script>