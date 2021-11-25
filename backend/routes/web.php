<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SubmissionController;
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
//
// Route::get('/', function () {
//     return view('welcome');
// });
//
// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

// userログイン側
Route::group(['middleware' => ['auth']], function() {
  Route::get('/submission',[SubmissionController::class,'index'])->name('submissions.index');
  Route::post('/submission',[SubmissionController::class,'post'])->name('submissions.post');
  Route::get('/submission/confirm',[SubmissionController::class,'confirm'])->name('submissions.confirm');
  Route::post('/submission/confirm',[SubmissionController::class,'send'])->name('submissions.send');
  Route::get('/submission/complete',[SubmissionController::class,'complete'])->name('submissions.complete');
});

require __DIR__.'/auth.php';
