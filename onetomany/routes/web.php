<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\Post;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/insert', function(){
    $user = User::findOrFail(1);
    $post = new Post(['titulo'=>'el perro pepe','cuerpo'=>'mañana el perro pepe da una conferencia de presas']);
    $user->post()->save($post);
});

Route::get('/leer',function(){
    $user = User::findOrFail(1);
    //return $user->post;
    foreach($user->post as $post){
        echo $post->titulo . "<br>";
    }
    foreach($user->post as $post){
        echo $post->cuerpo . "<br>";
    }
});
Route::get('/actualizar', function(){
    // $post = Post::whereUserId(1)->first();
    // $post->titulo="Update new titulo";
    // $post->save();
    $user = User::find(1);
    $user->post()->whereId('id','=',2)->update(['titulo'=>'artur lewind']);

});
Route::get('/eliminar', function(){
    $user = User::find(1);
    $user->post()->whereId(1)->delete();
    return "done";

});


