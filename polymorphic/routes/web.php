<?php

use Illuminate\Support\Facades\Route;
use App\Models\Photo;
use App\Models\Staff;
use App\Models\User;
use App\Models\Product;
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



Route::get('/leer', function(){
    $staff = Staff::findOrFail(1);
    foreach($staff->photo as $photo){
        return $photo->path;
    }
    
});


Route::get('/insertar', function(){
    $staff = Staff::find(1);

    if ($staff) {
        // Supongo que 'photo' es una relación en el modelo Staff
        $staff->photo()->create(['path' => 'example.jpg']);
        return "Foto insertada correctamente.";
    } else {
        return "No se encontró el objeto Staff con ID 1.";
    }
});

Route::get('/actualizar', function(){
    $staff = Staff::findOrFail(1);
    $photo= $staff->photo()->whereId(1)->first();
    $photo->path = "imagen.png";
    $photo->save();
   
});

Route::get('/eliminar', function(){
    $staff = Staff::findOrFail(1);
    $staff->photo()->whereid(1)->delete();
});

Route::get('/assing', function(){
    $staff = Staff::findOrFail(1);
    $photo =Photo::find(3);
    $staff->photo()->save($photo);
});

Route::get('/unassign', function(){
    $staff = Staff::findOrFail(1);
    $staff->photo()->whereId(3)->update(['imageable_id' => '', 'imageable_type' => '']);
});

