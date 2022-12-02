<template src="./Login.html"></template>
<style src="./Login.scss" lang="scss" scoped>
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
export default class Login extends Vue {
    Form = {
        Login: "",
        Password: ""
    }
    store = useStore(key)

    mounted() {
        if (this.$cookies.isKey("User")) {
            if (this.$cookies.get("User").Login != null && this.$cookies.get("User").Password) {
                this.Form = { Login: this.$cookies.get("User").Login, Password: this.$cookies.get("User").Password }
                this.Login()
            } else {
                this.store.state.Menu = "Main"
            }
        } else {
            this.store.state.Menu = "Main"
        }

    }

    Login() {
        axios.post(
            'https://otakuworld.org/BackOtakuWorld/SiteAbdelTmp/Login.php',
            {
                Login: this.Form.Login,
                Password: this.Form.Password
            },
        )
            .then((response) => {
                if (response.data != false) {
                    this.store.state.User = response.data
                    console.log(this.store.state.User)
                    this.$cookies.set("User", this.Form)
                } else {
                    this.store.state.Menu = "Main"
                }
            }).catch((error) => {
                this.store.state.Menu = "Main"
            });
    }
}
</script>