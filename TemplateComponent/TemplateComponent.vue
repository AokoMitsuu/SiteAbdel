<template src="./TemplateComponent.html"></template>
<style src="./TemplateComponent.scss" lang="scss" scoped>
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
export default class TemplateComponent extends Vue {
   
}
</script>