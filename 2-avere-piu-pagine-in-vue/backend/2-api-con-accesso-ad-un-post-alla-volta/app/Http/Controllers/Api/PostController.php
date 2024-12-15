<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {
        // restituirà tutti i post dal db

        // per ricevere tutti i post senza paginazione
        // $posts = Post::all();

        // per ricevere i post con paginazione
        // $posts = Post::paginate(2);

        // per ricevere i post E tutte le categorie e i tag collegati
         $posts = Post::with(['type', 'technologies'])->get(); 
         // posso al posto di get() mettere "paginate(2)" se voglio sfruttare la paginazione


        // dd($posts);

        // restituiamo un oggetto php che verrà convertito in JSON
        // i dati utili dell'api sono dentro la proprietà "results"
        return response()->json([
            "success" => true,
            "results" => $posts
        ]);

    }

    //funzione responsabile dell'api che fa vedere i singoli posts 
    public function show($id) {

        // per trovare il post senza eager loading
        // $post = Post::find($id);

        $post = Post::with(['type', 'technologies'])->where('id', '=', $id)->first();

        // possiamo scrivere la stessa cosa in questo modo:
        // ->find() cerca la riga della tabella che abbia la chiave primaria (id) uguale al valore che passiamo tra parentesi
        // $post = Post::with(['category', 'tags'])->find($id);

        // la query che risulta da questa espressione è:
        // "SELECT *
        // FROM posts
        // INNER JOIN category
        // ON posts.category_id = category.id
        // INNER JOIN post_tag
        // ON post.id = post_tag.post_id
        // INNER JOIN tags
        // ON tags.id = post_tag.tag_id
        // WHERE id = $id"

        // dd($post);

        return response()->json([
            "success" => true,
            "post" => $post
        ]);

    }





}
