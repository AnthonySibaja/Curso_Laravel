<?php

use Illuminate\Support\Facades\Route;

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

//Route::get('/', function () {
  //  return view('welcome');
//});

use App\Http\Controllers\PostController; //



//////////Llamar metodos de controller a router////////////////

//Route::get('/post/{id}', [PostController::class, 'index']);
//Route::resource('posts', 'App\Http\Controllers\PostController');


/////////////Trabajando con view////////////////
//Route::get('/contact', [PostController::class, 'contact']);
//Route::get('post/{id}/{name}/{password}', 'App\Http\Controllers\PostController@show_post');

//Practica de router como poner direcciones como tambien 
//pasar parametros y url en la que estamos

//Route::get('/about', function () {
    //return "Hi about page";
//});

//Route::get('/contact', function () {
   // return "Hi i am contact";
//});

//Route::get('/post/{id}/{name}',function($id, $name){
   // return "this is post number". $id. ' ' .$name;

//});

//Route::get('admin/posts/example', array('as'=>'admin.home' ,function(){
    //$url = route('admin.home');
    //return "this url is ". $url;
//}));

////base de datos ////

///////////Insertar datos/////////////////////
//Route::get('/insert', function(){
  //DB::insert('insert into post(titulo, body) values(?, ?)', ['PHP con laravel', 'Laravel es muy completo y está bien tuanis para aprenderlo']);

//});

///////////leer datos/////////////////////

// Route::get('/read', function(){
//   $resultado = DB::select('select * from post where id = ?', [1]);
//   return $resultado;
//   //foreach($resultado as $post){
//   //  return $post->titulo; 
//   //}

// });

//////////actualizar datos///////////

// Route::get('/update',function(){
//     $updated = DB::update('update post set titulo= "Peppito clavo un clavito"where id=?',[2]);

// });

///////////eliminar datos//////////////

// Route::get('/eliminar', function(){

//     $eliminar = DB::delete('delete from post where id = ?', [1]);
//     return $eliminar;

// });


////////////elocuencia//////////

use App\Models\Post;

Route::get('/find', function(){
    $post = Post::all(); 
    

    foreach($post as $post) {
       return $post->titulo;
    }

});