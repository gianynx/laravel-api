<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Technology;

class PostController extends Controller
{
    public function index(Request $request)
    {
        // dd($request->query());

        // $request->query('key') è un modo per accedere ai parametri della query string di una richiesta HTTP.
        if (!empty($request->query('technology_id'))) {

            // Estraggo il valore del parametro 'technology_id' dalla richiesta.
            $technology_id = $request->query('technology_id');

            // Se 'technology_id' è stato fornito, questa query recupera i post che hanno lo stesso 'technology_id'.
            $posts = Post::where('technology_id', $technology_id)->with('technology')->paginate(2);
        } else {
            $posts = Post::with('technology')->paginate(2);
        }
        $technologies = Technology::all();
        $data = [
            'posts' => $posts,
            'technologies' => $technologies
        ];
        return response()->json([
            'status' => 'success',
            'message' => 'Ok',
            'results' => $data
        ], 200);
    }

    public function show($slug)
    {
        $post = Post::with('technology')->where('slug', $slug)->first();
        if ($post) {
            return response()->json([
                'status' => 'success',
                'message' => 'Ok',
                'results' => $post
            ], 200);
        } else {
            return response()->json([
                'status' => 'error',
                'message' => 'Error'
            ], 404);
        }
    }
}
