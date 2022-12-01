<template>
  <Header></Header>
</template>

<script lang="ts">
import { Options, Vue } from 'vue-class-component';
import { key } from './store'
import { storeKey, useStore } from 'vuex'
import Header from './components/Header/Header.vue'
import { computed } from 'vue'

@Options({
  components: {
    Header,
  },
})
export default class App extends Vue {
  store = useStore(key)

}
</script>

<style>
#app {
  background-color: #303132 !important;
  min-height: 100vh;
  overflow: hidden;
}

@import'./assets/style/global.scss';
@import'~bootstrap/dist/css/bootstrap.css'
</style>
