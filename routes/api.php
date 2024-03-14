<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->group(static function (): void {
    Route::get('events', \App\Http\Controllers\Api\Event\IndexController::class)->name('events');
    Route::put('subscribe', \App\Http\Controllers\Api\Event\SubscribeController::class)->name('subscribe');
    Route::put('drop', \App\Http\Controllers\Api\Event\DropController::class)->name('drop');
});
