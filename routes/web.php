<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\SesiController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ProjectsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::middleware(['guest'])->group(function(){
    Route::get('/', [SesiController::class, 'index'])->name('login');
    Route::post('/', [SesiController::class, 'logout']);
    Route::post('/logout', [SesiController::class, 'logout'])->name('logout');
});
Route::get('/home', function(){
    return redirect('/admin');
});

Route::middleware(['auth'])->group(function(){
    Route::get('/admin', [AdminController::class, 'index']);
    Route::get('/admin/GH', [AdminController::class, 'GH'])->middleware('userAkses:GH');
    Route::get('/admin/MGR', [AdminController::class, 'MGR'])->middleware('userAkses:MGR');
    Route::get('/admin/SPV', [AdminController::class, 'SPV'])->middleware('userAkses:SPV');
    Route::get('/admin/Staff', [AdminController::class, 'Staff'])->middleware('userAkses:Staff');
    Route::get('/admin/QA', [AdminController::class, 'QA'])->middleware('userAkses:QA');
    
});

Route::group(['prefix' => 'projects', 'as' => 'projects.'], function () {
    Route::get('/list', [ProjectsController::class, 'showList'])->name('list');
    Route::get('/add', [ProjectsController::class, 'create'])->name('create');
    // Lainnya, seperti menyimpan proyek baru, mengedit, menghapus, dll.
});



Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();

Route::get('/projects/{projectId}', 'ProjectController@show');
Route::get('/projects', [ProjectController::class, 'index']);




Route::group(['middleware' => 'auth'], function () {
 	Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
 	Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
    Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);
 	Route::get('{page}', ['as' => 'page.index', 'uses' => 'App\Http\Controllers\PageController@index']);
 });

//data
Route::get('/projects', [ProjectsController::class, 'index']);
Route::get('/projects', [ProjectsController::class, 'index'])->name('projects.index');