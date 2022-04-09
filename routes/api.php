<?php

use App\Http\Controllers\Api\ApiController;
use App\Http\Controllers\Api\SetDataController;
use Illuminate\Http\Request;
use App\Http\Controllers\Api\ApiAuthenticationController;
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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('/index', [SetDataController::class, 'index']);
Route::post('/create', [SetDataController::class, 'create']);
Route::post('/update', [SetDataController::class, 'update']);
Route::get('/show', [SetDataController::class, 'show']);
Route::post('/delete', [SetDataController::class, 'destroy']);



//API access token

Route::post('register', [ApiAuthenticationController::class, 'register']);
Route::post('login', [ApiAuthenticationController::class, 'login']);

Route::middleware('auth:api')->group(function () {
    Route::get('getuser', [ApiAuthenticationController::class, 'userInfo']);
});


// Route::post('/testing', function () {

//     return Contact::create([
//         'name' => "ewerf",
//         'email' => "sdf@sdf",
//         'phone' => "34345"

//     ]);
// });