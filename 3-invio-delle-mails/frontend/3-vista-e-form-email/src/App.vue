<script>
import HeaderApp from './components/HeaderApp.vue';
import FooterApp from './components/FooterApp.vue';

export default {
  components:{
   HeaderApp,
   FooterApp
  },

  data() {
    return {

    }
  },

  mounted() {
 

  },

  methods: {

  },
}

</script>

<template>
   <HeaderApp></HeaderApp>
  <div class="container py-5">
    <router-view></router-view>
  </div>
  <FooterApp></FooterApp>
  
</template>

<style scoped>


</style>
