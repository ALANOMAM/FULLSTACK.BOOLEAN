<script>

// importiamo axios
import axios from 'axios';

export default {
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
  <div class="container py-5">

    <ul>
      <li v-for="post in posts">
       <p><strong>Nome : </strong>{{ post.Nome }}</p> 
       <p><strong>Descrizione : </strong>{{ post.Descrizione }}</p>  
       <p><strong>Tipo : </strong>{{ post.type.title }}</p> 
      <p><strong>Tecnologie associate : </strong>
         <span class="" v-for="technology in post.technologies ">
            <span class="badge rounded-pill text-bg-success">{{technology.titolo}}</span>
         </span>
      </p> 
      </li>

    </ul>

  </div>
  <!---div che contiene le info dei mie posts end-->
  
</template>

<style scoped>


</style>
