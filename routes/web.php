<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\postController;
use App\Models\Post;

Route::get('/',homeController::class);

Route::get('/post',[postController::class, 'index']);
Route::get('/post/create',[postController::class, 'create']);
Route::post('/post',[postController::class,'store']);

Route::get('/post/{post}',[postController::class, 'show']);

Route::get('/post/{post}/edit',[postController::class,'edit']);

Route::put('/post/{post}',[postController::class,'update']);

Route::delete('/post/{post}',[postController::class,'destroy']);

Route::get('prueba', function(){
    /*Crear nuevo post
    $post = new Post;

    $post->title = 'tiTULO de prUEBa4';
    $post->content = 'contenido de prueba4';
    $post->categoria = 'categoria de prueba4';

    $post->save();
    return $post;*/
    


    /*mostrar registro con title prueba1, muestra el primero y Actualiza el dato de categoria
    $post = Post::where('title','prueba1')
        ->first();

    $post-> categoria='desarrollo web';
    $post->save();
    return $post;*/




    /*mostrar datos mayor o igual que 2
    $post = Post::where('id','>=','2') -> get();

    return $post;
    */




    /*Listar registros
    $post = Post::orderBy('categoria','asc')
    ->select('id','title','categoria')
    ->take(2)
    -> get();
    return $post;
    */




    /*eliminar datos    
    $post = Post::find(1);
    $post -> delete();
    return 'eliminado';
    */
    




    /*mostrar registro con id1
    $post = Post::find(1);*/


    /*return $post->published_at->format('d-m-y');
    return $post->created_at->diffForHumans();*/



    $post = Post::find(1);
    dd($post->is_active);


});