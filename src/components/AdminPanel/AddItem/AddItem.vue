<template src="./AddItem.html"></template>
<style src="./AddItem.scss" lang="scss" scoped>

</style>

<script lang="ts">
import { Options, Vue } from 'vue-class-component';
import { storeKey, useStore } from 'vuex'
import { key } from '@/store'
import axios from 'axios'
import bootstrap from 'bootstrap'

@Options({
    props: {},
    components: {
    }
})
export default class AddItem extends Vue {
    Item = {
        name: "",
        description: "",
        price: 0,
        image: ""
    }
    image = ""
    UploadError = ""

    UploadFile() {
        this.image = (this.$refs.file as any).files[0];
        this.submitFile()
    }

    submitFile() {
        const formData = new FormData();
        formData.append('file', this.image);
        const headers = { 'Content-Type': 'multipart/form-data', };
        axios.post('https://otakuworld.org/BackOtakuWorld/SiteAbdelTmp/AddImage.php', formData, { headers }).then((res) => {
            if (res.data == "The file has been uploaded.") {
                this.Item.image = (this.image as any).name;
                axios.post(
                    'https://otakuworld.org/BackOtakuWorld/SiteAbdelTmp/Items.php',
                    {
                        Mode: "Add",
                        item: this.Item
                    },
                ).then((response) => {
                    this.Item = {
                        name: "",
                        description: "",
                        price: 0,
                        image: ""
                    };
                    
                }).catch(function (error) {
                    console.log(error)
                });
            } else {
                this.UploadError = res.data
                var x = document.getElementById("snackbar");
                (x as any).className = "show";
                setTimeout(function () { (x as any).className = (x as any).className.replace("show", ""); }, 3000);
            }
        });
    }
}
</script>