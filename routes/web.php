<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ToolController;

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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::view('/', 'home')->name('home');
    Route::get('/tools', [ToolController::class, 'index'])->name('tools.index');
    Route::get('/tools/create', [ToolController::class, 'create'])->name('tools.create');
    Route::get('/tools/personal', [ToolController::class, 'personal'])->name('tools.personal');
    Route::get('/tools/{tool:slug}', [ToolController::class, 'show'])->name('tools.show');
});
