<script>

export default{

 name:"FooterApp",

   data(){
    return{

    }
   }

}

</script>

<template>
  
   <div class="card text-center">
  <div class="card-header">
    SALUTI
  </div>
  <div class="card-body">
    <p class="card-text">Grazie di avere visitato il mio sito, per maggiori informazioni mi potete contattare cliccando sotto.</p>
    <router-link :to="{name: 'contact-me'}"  class="btn btn-primary">Contattami</router-link>
  </div>
</div>

</template>

<style scoped lang="scss">

</style>