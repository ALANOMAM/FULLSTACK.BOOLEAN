<script>

import axios from 'axios';

export default {
    name: 'SinglePage',

    data() {
        return {
            post: null,
            postId: null,

            apiBaseUrl: 'http://127.0.0.1:8000/api',
           
        }
    },

    mounted() {
        this.postId = this.$route.params.id;
        
        axios.get(this.apiBaseUrl + '/posts/' + this.postId).then(res => {

            console.log(res)

            if(res.data.success) {
                
                // se troviamo il post lo salviamo
                this.post = res.data.post

            } else {
                // altrimenti torniamo alla home
                this.$router.push({name: 'home'})
            }


        })
    },
}

</script>

<template>


<div v-if="post" class="container py-5 fs-2">
    <h1 class="py-4">PAGINA DEL POST SINGOLO </h1>
<!----->
<div class="card bg-info"  style="width: 70rem;">
  <img :src="'http://localhost:8000' + post.Immagine_di_copertina" class="card-img-top" alt="...">
  <div class="card-body">
    <ul class="nav flex-column">
            <li><strong>Post title : </strong>{{ post.Nome }}</li>
            <li><strong>Post description : </strong>{{post.Descrizione}}</li>
            <li><strong>Post type : </strong>{{post.type?.title}}</li>
            <li><strong>Post technologies : </strong>
                <span v-for=" technology in post.technologies " class="badge rounded-pill text-bg-success">
                    {{ technology.titolo}}
                </span>
            </li>
        </ul>
  </div>
</div>
<!----->

    </div>

  

  

  

    <div v-else>
        <div class="spinner-border" role="status">
            <span class="visually-hidden">Loading...</span>
        </div>
    </div>

<!--Il pulsante che mi fa tornare alla vista home-->
<router-link :to="{name: 'home'}"  class="btn btn-primary">Torna all'index</router-link>
</template>


<style lang="scss" scoped>
</style>