import { Store } from 'vuex'
import { User } from './interfaces/User'

declare module '@vue/runtime-core' {
  // declare your own store states
  interface State {
  }

  // provide typings for `this.$store`
  interface ComponentCustomProperties {
    $store: Store<State>
  }
}