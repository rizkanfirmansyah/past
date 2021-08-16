<?php

use Illuminate\Support\Facades\Route;

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
    // return view('home');
    return redirect(Route('master'));
});

Auth::routes();

Route::prefix('master')->group(function () {
    Route::get('/', [App\Http\Controllers\HomeClient::class, 'home'])->name('master');
    Route::get('/dashboard', [App\Http\Controllers\HomeClient::class, 'home'])->name('dashboard');
    Route::get('/rank', [App\Http\Controllers\RankController::class, 'index'])->name('rankdtTables');
    Route::get('/position', [App\Http\Controllers\PositionController::class, 'index'])->name('positiondtTables');
    Route::get('/member', [App\Http\Controllers\MemberController::class, 'index'])->name('memberdtTables');
    Route::get('/task', [App\Http\Controllers\TaskController::class, 'index'])->name('taskdtTables');
    Route::get('/team', [App\Http\Controllers\TeamController::class, 'index'])->name('teamdtTables');
    Route::get('/user', [App\Http\Controllers\UserController::class, 'index'])->name('teamdtTables');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
