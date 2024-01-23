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
// Route::get('/insert', function(){
//   DB::insert('insert into post(titulo, body) values(?, ?)', ['Php laravel', 'Laravel es muy completo y está bien tuanis para aprenderlo']);

// });

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

// Route::get('/find', function(){
//     $post = Post::all(); 
    

//     foreach($post as $post) {
//        return $post->titulo;
//     }

// });

// Route::get('/find', function(){

//     $post = Post::where('id', 2)->orderBy('id', 'desc')->take(1)->get();
//     return $post;

// });

// Route::get('/findmore',function(){

//   $post =Post::findOrFail(1);
//   return $post;

//   // $post =Post::where('users_count','<',50)->findOrFail;
  
// });

// Route::get('/basicinsert', function(){
//   $post = new Post;
//   $post ->titulo='nuevo titulo';
//   $post ->body ='el perro ladro pepe';
//   $post->save();

// });

// Route::get('/basicinsert', function(){
//   $post = Post::find(1);
//   $post ->titulo='nuevo titulo';
//   $post ->body ='el perro ladro pepe';
//   $post->save();

// });

// Route::get('/create', function(){
//      Post::create(['titulo'=>'creando metodo','body'=>'Wow EL PERRO LADRO']);
    
// });

//  Route::get('/update', function(){
//      Post::where('id',2)->update(['titulo'=>'Actualizacion del el pepe perro','body'=>'El perro pepe ahora volo']);
  
// });

// Route::get('/delete', function(){

//     $post=Post::find(1);

//     $post->delete();

// });

// Route::get('/delete2', function(){
//     Post::destroy([2,3]);
    
// });

// Route::get('/softdelete', function(){
//     Post::find(5)->delete();
// });

// Route::get('/readsotfdelete', function(){
//       //  $post = Post::find(6);
//       //  return $post;

//       $post = Post::onlyTrashed()->where('id', 4 )->get();
//       return $post;
// });


// Route::get('/restore', function(){
//     Post::withTrashed()->where('id', 0)->restore();

// });

Route::get('/forcedelete', function(){

    Post::withTrashed()->where('id', 6)->forceDelete();
});