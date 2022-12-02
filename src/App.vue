<template>
  <Header></Header>
  <Catalogue v-if="store.state.Menu == 'Catalogue'"></Catalogue>
    <About v-if="store.state.Menu == 'About'"></About>
    <FindUs v-if="store.state.Menu == 'FindUs'"></FindUs>
    <Main v-if="store.state.Menu == 'Main'"></Main>
    <Login v-if="(store.state.Menu == 'Login' && store.state.User == null)"></Login>
    <AdminPanel v-if="store.state.Menu == 'AdminPanel'"></AdminPanel>
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
import Login from './components/Login/Login.vue'
import AdminPanel from './components/AdminPanel/AdminPanel.vue'
import { computed } from 'vue'

@Options({
  components: {
    Header,
    Catalogue,
    About,
    FindUs,
    Main,
    Login,
    AdminPanel
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
