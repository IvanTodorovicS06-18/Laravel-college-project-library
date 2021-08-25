<?php

use App\Models\rentBook;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\userController;
use App\Http\Controllers\autorController;
use App\Http\Controllers\chartController;
use App\Http\Controllers\genreController;
use App\Http\Controllers\rentBookController;
use App\Http\Controllers\publisherController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;

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

Route::get('/', [BookController::class, 'all']);

//registracione rute

Route::get('/register', [RegisterController::class, 'Index'])->name("register");
Route::post('/register', [RegisterController::class, 'Store']);

//Login rute

Route::get('/login', [LoginController::class, 'index'])->name("login"); 
Route::post('/login', [LoginController::class, 'store']);

//logout ruta

Route::post('/logout', [LogoutController::class, 'logout'])->name("logout");

//rute za knjigu

Route::get('/book/books', [BookController::class, 'all'])->name("books"); 
Route::get('/book/showBook/{id}', [BookController::class, 'showBook'])->name("show.Book");
Route::get('/search', [BookController::class, 'search']); 
Route::get('/book/create', [BookController::class, 'create']);
Route::post('/book/store', [BookController::class,'store']);
Route::delete('/book/delete/{id}', [BookController::class,'delete'])->name('book.delete');
 
//rute za update knjige

Route::get('/book/edit/{id}', [BookController::class, 'edit'])->name('book.edit');
Route::put('/book/update/{id}', [BookController::class, 'update']);

//rute za Autora

Route::get('/autor/allAuthors', [autorController::class, 'all'])->name("authors"); 
Route::get('/autor/autorCreate', [autorController::class, 'create']);
Route::post('/autor/store', [autorController::class,'store']);
Route::delete('/autor/delete/{id}', [autorController::class,'delete'])->name('autor.delete');

//rute za update autora

Route::get('/autor/edit/{id}', [autorController::class, 'edit'])->name('autor.edit');
Route::put('/autor/update/{id}', [autorController::class, 'update']);

//rute za zanr

Route::get('/zanr/allGenres', [genreController::class, 'all'])->name("genres"); 
Route::get('/zanr/genreCreate', [genreController::class, 'create']);
Route::post('/zanr/store', [genreController::class,'store']);
Route::delete('/zanr/delete/{id}', [genreController::class,'delete'])->name('zanr.delete');

//rute za update zanra

Route::get('/zanr/edit/{id}', [genreController::class, 'edit'])->name('zanr.edit');
Route::put('/zanr/update/{id}', [genreController::class, 'update']);

//rute za izdavaca

Route::get('/publisher/allPublishers', [publisherController::class, 'all'])->name("publishers"); 
Route::get('/publisher/publisherCreate', [publisherController::class, 'create']);
Route::post('/publisher/store', [publisherController::class,'store']);
Route::delete('/publisher/delete/{id}', [publisherController::class,'delete'])->name('publisher.delete');

//rute za update zanra

Route::get('/publisher/edit/{id}', [publisherController::class, 'edit'])->name('publishers.edit');
Route::put('/publisher/update/{id}', [publisherController::class, 'update']);

//rute za usera
Route::group(['middleware' => ['auth','admin']],function (){
    
Route::get('/user/allUsers', [userController::class, 'all'])->name("users"); 
Route::get('/user/userCreate', [userController::class, 'create']);
Route::post('/user/store', [userController::class,'store']);
Route::delete('/user/delete/{id}', [userController::class,'delete'])->name('user.delete');
Route::get('/editor', [chartController::class, 'index']);


//rute za update zanra

Route::get('/user/edit/{id}', [userController::class, 'edit'])->name('user.edit');
Route::put('/user/update/{id}', [userController::class, 'update']);
});


Route::group(['middleware' => ['auth','editor']],function (){

    Route::get('/editor', [chartController::class, 'index']);
    Route::get('/rent/allRents', [rentBookController::class, 'all'])->name("rentBooks"); 

});


//rute za rent


Route::get('/rent/rentCreate/{id}', [rentBookController::class, 'create'])->name('createRent');
Route::post('/rent/store', [rentBookController::class,'store']);
Route::put('/rent/update/{id}', [rentBookController::class, 'update'])->name('rent.update');

//rute za post
Route::post('/book/storePost', [BookController::class,'storePost']);


//rute za sve

Route::get('/kontakt', function () {
    return view('kontakt');
});

Route::get('/oNama', function () {
    return view('oNama');
});
