<?php



use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


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
//     return view('home');
// });
Route::get('/', 'HomeController@index');

Route::get('users/{user}',  ['as' => 'users.edit', 'uses' => 'UserController@edit']);
Route::get('/users.edit',  'UserController@edit');
Route::get('/users.show',  'UserController@show');
Route::post('/profile',  'UserController@update');
Route::post('/users.profile',  'ProjectsController@index');

Route::get('/projects.create', 'ProjectsController@create');
Route::post('/projects.store', 'ProjectsController@store');


Route::get('/profile', 'UserController@profile')->middleware(['auth']);
Auth::routes();