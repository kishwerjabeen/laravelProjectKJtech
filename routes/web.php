<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\SingleActionController;
use App\Http\Controllers\ResourcePhotoController;


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

Route::get('/',[DemoController::class, 'index']);
// anoothe but long method but its not a good practice 
Route::get('/about', 'App\Http\Controllers\DemoController@about');
// Single Action
Route::get('/courses',SingleActionController::class);

// ReSource Controller
Route::resource('photo',ResourcePhotoController::class);

/* Route::get('/', function(){  
    return view('index');
});


Route::get('/about', function(){
    return view('about');
});

Route::get('/courses', function(){
    return view('courses');
});

 */






















/* Route::get('/{name?}',function($name = null){
$data = compact('name');
    return view('home') -> with($data); 
});
 */



/* Route::get('/', function () {
    return view('welcome');
}); */


/* Route::get('/demo',function(){
    return view('demo');
}); */

// send data 

/* Route::get('/demo/{name}/{id?}',function($name,$id=null){
   echo $name . " ";
   echo $id;

}); */

/* 
Route::get('/demo/{name}/{id?}',function($name,$id=null){
//   use compact {its convert data into Array }
$data = compact('name', 'id');
// print_R use for print array{}
// print_r($data);
// now goto view page 
return view('demo')->with(($data));
 });
 */



/* Route::get('/demo',function(){
    echo "hello world..!!";
}); */
// asay naeh open hogae postmen kay through hojyegae
/* Route::post('/test', function(){
    echo "hello world..!! POST";
});
// ya sab say hojey gae 
Route::any('/test', function(){
    echo "hello world..!! POST";
}); */