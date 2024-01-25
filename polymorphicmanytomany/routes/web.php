<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;
use App\Models\Video;

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

Route::get('/insertar', function () {
    $tag1 = Tag::find(1);
    $tag2 = Tag::find(2);
    $post = Post::create(['name'=>'pepevideo']);

    $video = Video::create(['name'=>'perrovideo']);
    $post->tags()->save($tag1);
    $video->tags()->save($tag2);

});
Route::get('/leer', function () {
   
    $post =Post::findOrFail(1);
    foreach($post->tags as $tag){
        echo $tag;
    }
});
Route::get('/actualizar', function () {
    // $post =Post::findOrFail(1);
    // foreach($post->tags as $tag){
    //     $tag->whereId(1)->update(['name'=>'html']);
    // }

    $post =Post::findOrFail(1);
    $tag = Tag::find(2);

    $post->tags()->save($tag);
    $post->tags()->attach($tag);   
    $post->tags()->sync([1,2]); 
});
Route::get('/eliminar', function () {
    $post =Post::findOrFail(1);
    
    foreach($post->tags as $tag){
        $tag->whereId(2)->delete();
    }
    
});
