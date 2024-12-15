<script>

// importiamo axios
import axios from 'axios';

export default {
    name:'HomePage',
  data() {
    return {

      posts: [],

      
      //salvo un pezzo del mio api generato da laravel in questa variabile
      //tutto precedentemente testato su postman
      baseApiUrl: 'http://127.0.0.1:8000/api',

    }
  },

  mounted() {
     //chiamata axios che tramite l'api mi restituisce i posts
    axios.get(this.baseApiUrl + '/posts').then(res => {

      console.log(res);

      this.posts = res.data.results;

    })

  },

  methods: {

  },
}

</script>

<template>
   <!---div che contiene le info dei mie posts start-->
  <div class="container py-5 ">
    <h1>BENVENUTI NELLA HOMEPAGE</h1>
   
    <div class="big-box">
    <ul class="d-flex list-group">
      <li v-for="post in posts" class="py-4 small-box list-group-item">
       <p><strong>Nome : </strong>{{ post.Nome }}</p> 
       <p><strong>Descrizione : </strong>{{ post.Descrizione }}</p>  
       <p><strong>Tipo : </strong>{{ post.type.title }}</p> 
      <p><strong>Tecnologie associate : </strong>
         <span class="" v-for="technology in post.technologies ">
            <span class="badge rounded-pill text-bg-success">{{technology.titolo}}</span>
         </span>
      </p> 
      <!--quello che mi porta alle varie repo-->
      <p><strong>Link alla repo GitHub : </strong><a :href="post.Link_repo_GitHub">{{ post.Link_repo_GitHub }}</a></p> 
      <!--Il pulsante che mi fa  passare all vista delle show-->
      <router-link :to="{name: 'single-post', params: {id: post.id}}"  class="btn btn-primary">Mostra il post</router-link>
      </li>
    </ul>
  </div>


  </div>
  <!---div che contiene le info dei mie posts end-->
  
</template>

<style scoped lang="scss">


  .small-box{
    border: 1px solid rgb(217, 215, 215);
  }


</style>