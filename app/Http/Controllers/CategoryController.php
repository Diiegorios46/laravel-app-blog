<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class CategoryController extends Controller
{
    public function getIndex(){
        $posts = Post::all(); 
        return view('List-categories', ['posts' => $posts]); 
    }

    public function getShow($id){
        $posts = Post::findOrFail($id);
        return view('category/show/viewDetailsPost' , ['posts' => $posts]);    
    }

    public function getCreate(){
        return view('category/create/addPost');
    }

    public function deletePost($id){
        $post = Post::findOrFail($id);
        $post->delete();

        return redirect('/category')->with('success', 'Post eliminado correctamente');
    }

    public function storePost(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'poster' => 'required|string|max:255',
            'habilitated' => 'required|boolean',
            'content' => 'required|string',
        ]);

        $post = new Post();
        $post->title = $validated['title'];
        $post->poster = $validated['poster'];
        $post->Habilitated = $validated['habilitated'];
        $post->content = $validated['content'];
        $post->save();

        return redirect('/category')->with('success', '¡Post creado exitosamente!');
    }


    public function getEdit(Request $request,$id)
    {
        // Validar datos
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'poster' => 'required|string|max:255',  
            'habilitated' => 'required|boolean',
            'content' => 'required|string',
        ]);

        // Buscar el post por ID
        $post = Post::findOrFail($id);

        // Actualizar campos
        $post->title = $validated['title'];
        $post->poster = $validated['poster'];
        $post->Habilitated = $validated['habilitated'];
        $post->content = $validated['content'];

        // Guardar cambios
        $post->save();

        return redirect('/category/show/' . $id)->with('success', '¡Post actualizado correctamente!');
        
    }
}
