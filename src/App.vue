<template>
  <Header></Header>
  <Catalogue v-if="store.state.Menu == 'Catalogue'"></Catalogue>
  <About v-if="store.state.Menu == 'About'"></About>
  <FindUs v-if="store.state.Menu == 'FindUs'"></FindUs>
  <Main v-if="store.state.Menu == 'Main'"></Main>
</template>

<script lang="ts">
import { Options, Vue } from 'vue-class-component';
import { key } from './store'
import { storeKey, useStore } from 'vuex'
import Header from './components/Header/Header.vue'
import Main from './components/Main/Main.vue'
import FindUs from './components/FindUs/FindUs.vue'
import About from './components/About/About.vue'
import Catalogue from './components/Catalogue/Catalogue.vue'
import { computed } from 'vue'

@Options({
  components: {
    Header,
    Catalogue,
    About,
    FindUs,
    Main
  },
})
export default class App extends Vue {
  store = useStore(key)
  Menu = "Main"
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
