<template src="./ItemCard.html"></template>
<style src="./ItemCard.scss" lang="scss" scoped>
</style>

<script lang="ts">
import { Options, Vue } from 'vue-class-component';
import { storeKey, useStore } from 'vuex'
import { key } from '@/store'
import axios from 'axios'

@Options({
    props: {
        Item: {}
    },
    components: {
    }
})
export default class ItemCard extends Vue {
    Item: any
}
</script>