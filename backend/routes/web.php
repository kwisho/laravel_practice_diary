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
Auth::routes();

Route::group(['middleware' => ['auth']], function() {
  Route::get('/submission',[SubmissionController::class,'index'])->name('submissions.index');
  Route::post('/submission/confirm',[SubmissionController::class,'confirm'])->name('submissions.confirm');
  Route::post('/submission/complete',[SubmissionController::class,'complete'])->name('submissions.complete');
});
