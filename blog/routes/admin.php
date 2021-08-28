<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\DashboardController;
use App\Models\User;

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


Route::prefix('admin')->group(function(){

 Route::get('/' , [DashboardController::class , 'index'])->name('dashboard');
 
 Route::resource('/user' , UserController::class);
 Route::resource('/role' , RoleController::class);
   //for test only 
   Route::get('/hasmanyinverse/{id}' , function($id){
       $role = User::find($id)->with([
           'role' => function($query){
               $query->select('id' , 'name');
           }
       ])->get();

       return response()->json($role);
   });   
});