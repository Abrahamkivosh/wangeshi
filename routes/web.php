<?php

use App\Http\Controllers\ChamaController;
use App\Http\Controllers\MeetingController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\userController;
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
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard1');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->group(function ()
{
    Route::resource('chamas',ChamaController::class) ;
    Route::resource('meetings',MeetingController::class) ;
    Route::resource('payments',PaymentController::class) ;
    Route::resource('users',userController::class) ;
    Route::post('join-chama/{chama}',[ChamaController::class,'joinChama'])->name("join.chama") ;
    Route::post('leave-chama/{chama}',[ChamaController::class,'leaveChama'])->name("leave.chama") ;
    Route::post('approve-chama-member/{chama}',[ChamaController::class,'approveChamaMember'])->name("approve.chama.member") ;

    
});