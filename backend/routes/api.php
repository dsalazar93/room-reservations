<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\RoomController;
use App\Http\Controllers\Api\BookingController;
use App\Models\Booking;

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

Route::get('/rooms', [RoomController::class, 'index']);
Route::get('/room/{id}', [RoomController::class, 'show']);

Route::get('/bookings', [Booking::class, 'index']);
Route::post('/bookings/save', [Booking::class, 'store']);
