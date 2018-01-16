<?php
use App\Motorbike;
use App\Owner;
use App\Http\Controllers\DataController;
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

// Route::get('/', function () {
//     return view('home')->with('motorbikes',Motorbike::all());
// });

 // Route::get('/', 'ReadDataController@showData');

 // Route::post('/', 'WriteDataController@postData');

 Route::resource('/', 'DataController');
 //Route::POST('/', 'DataController@storeData');


// Route::get('/', function () {
//     return View('home')
//         ->with('motorbikes', Motorbike::all()),
//         ->with('owners', Owner::all())
// })
//Route::get('test', function () {
//return  Owner::all();
//});