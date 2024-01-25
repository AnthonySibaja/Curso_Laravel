<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Role;

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
    $user = User::find(1);
    $user->roles()->save(new Role(['name'=>'jefe']));
});

Route::get('/ler',function(){
    $user = User::findOrFail(1);
    foreach($user->roles as $role){
        //dd($role);
        return $role;
    }
});

Route::get('actualizar', function(){
    $user = User::findOrFail(1);
    if($user->roles()->exists()){
        foreach($user->roles as $role){
            if($role->name =='jefe'){
                $role->name = 'pepe';
                $role->save();
            }
        }
    }
});

Route::get('/eliminar', function(){
    $user = User::findOrFail(1);
    //$user->roles()->delete();
    foreach($user->roles as $role){
        $role->whereId(4)->delete();
    }
});



Route::get('/attach', function () {
    $user = User::findOrFail(1);
    $user->roles()->attach(5);
});

Route::get('/detach', function () {
    $user = User::findOrFail(1);
    $user->roles()->detach(3);
});

Route::get('/sync', function(){
    $user = User::findOrFail(1);
    $user->roles()->sync([3]);
});