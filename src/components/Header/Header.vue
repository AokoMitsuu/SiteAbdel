<template src="./Header.html"></template>
<style src="./Header.scss" lang="scss" scoped>
</style>

<script lang="ts">
import { Options, Vue } from 'vue-class-component';
import { storeKey, useStore } from 'vuex'
import { key } from '@/store'
import axios from 'axios'

@Options({
    props: {},
    components: {
    }
})
export default class Header extends Vue {
   
}
</script>