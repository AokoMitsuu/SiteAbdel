<script setup lang="ts">
defineProps<{
}>()
</script>

<template>


  <div class="container">
    <div class="row">
      <div class="col-sm">
        <img class="logo  " src="../assets/vin.png" alt="">
      </div>
      <div class="col-sm">
          <button type="button" class="btn btn-transparent">Accueil</button>
          <button type="button" class="btn btn-transparent">Catalogue</button>
          <button type="button" class="btn btn-transparent">A propos</button>
          <button type="button" class="btn btn-transparent">Où nous trouver</button>    
      </div>
      <div class="col-sm header-left">
        <button  type="button" class="btn btn-transparent">Acheter</button>
        <img class="logoBuy" src="../assets/Buy-Icon.png" alt="">
      </div>
    </div>
  </div>




</template>

<style scoped>
.logo{
  height: 70px;
}

.logoBuy{
  height: 35px;
}



</style>
