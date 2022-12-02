<template src="./AdminPanel.html"></template>
<style src="./AdminPanel.scss" lang="scss" scoped>
</style>

<script lang="ts">
import { Options, Vue } from 'vue-class-component';
import { storeKey, useStore } from 'vuex'
import { key } from '@/store'
import axios from 'axios'
import AddItem from './AddItem/AddItem.vue'
@Options({
    props: {},
    components: {
        AddItem
    }
})
export default class AdminPanel extends Vue {
   
}
</script>