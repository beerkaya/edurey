<?php

use App\Http\Controllers\BookController;
use App\Providers\AppServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/', function () {
    return response()->json([
        'message' => 'Edurey API',
        'status' => 'success',
        'version' => AppServiceProvider::VERSION,
        'docs' => url('#')
    ]);
})->name('home');

Route::group([
    'middleware' => 'api',
], function () {
    Route::apiResources([
        'books' => BookController::class,
    ]);
});
