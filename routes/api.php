<?php

use App\Http\Controllers\UserResourceController;
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

Route::prefix('/user')->group(function () {
    Route::resource('individual', UserResourceController::class);
    /*    Route::controller(UserController::class)->group(function () {
            Route::get('/store', 'store')->name('api.user.store');
        });

        Route::resources([
            'array' => UserResourceController::class,
        ]);
        Route::get('/resource/get', [UserResourceController::class, 'addedAction']);
        Route::resource('only', UserResourceController::class)->only('index', 'store');
        Route::apiResource('api', UserResourceController::class)->only('index', 'store');
        Route::controller(UserResourceController::class)->group(function () {
            Route::resource('happy',);
        });*/
});
/*Route::resources([
    'users' => UserResourceController::class,
]);*/
//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});

