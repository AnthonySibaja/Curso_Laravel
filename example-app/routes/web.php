<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Http\Controllers\PostController; //
use App\Models\User;
use App\Models\Country;
use App\Models\Photo;
use App\Models\tag;

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

// Route::get('/forcedelete', function(){

//     Post::withTrashed()->where('id', 6)->forceDelete();
// });




///////Relaciones elocuentes/////////////
// Route::get('/user/{id}/post', function($id){
//     return User::find($id)->post->body;



// });

// Route::get('/post/{id}/user', function($id){
//     return Post::find($id)->user->name;
    
// });

// Route::get('/post', function(){
//     $user =User::find(1);

//    foreach($user->posts as $post){
//       echo $post->titulo . "<br>";

//    }

// });


////////// Relaciones entre tablas///////////

// Route::get('/user/{id}/role', function($id){
//   $user = User::find($id)->roles()->orderBy('id','desc')->get();

//   return $user;

  // foreach($user->roles as $role){
  //   return $role->name;
  // }
// });


//acceder a la relación entre tablas intermedia

// Route::get('/user/pivot', function(){
//   $user = User::find(1);
//   foreach($user->roles as $role){
//     echo $role->pivot->created_at;
//   }
// });


// Route::get('/user/country', function(){
//     $country = Country::find(1);
//     foreach($country->post as $post){
//       return $post->titulo;
//     }
// });


//// Poliformismo en relaciones
// Route::get('/user/photos',function(){
  
//     $post = Post::find(1);
//     foreach($post->photos as $photo){
//         echo $photo->path ."<br>";
//   }
// });


// Route::get('/photo/{id}/post', function($id){
//     $photo = Photo::findOrFail($id);
//     return $photo->imageable;


// });



//// Poliformismo en relaciones muchos a muchos

// Route::get('/post/tag', function(){
//       $post = Post::find(1);
//       foreach($post->tags as $tag){
//         return $tag->name;
//       }
// });


// Route::get('/tag/post', function(){
//     $tag = Tag::find(2);
//     foreach($tag->post as $post){
//       echo $post->titulo;
//     }
//     //return $tag;

// });

/*
|--------------------------------------------------------------------------
| CRUD application
|--------------------------------------------------------------------------
*/



Route::get('/posts', 'PostController');





