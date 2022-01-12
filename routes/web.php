<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChamaController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\MeetingController;
use App\Http\Controllers\PaymentController;

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
    return view('dashboard1');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->group(function ()
{
    Route::resource('chamas',ChamaController::class) ;
    Route::resource('meetings',MeetingController::class) ;
    Route::resource('payments',PaymentController::class) ;
    Route::post('join-chama/{chama}',[ChamaController::class,'joinChama'])->name("join.chama") ;
    Route::post('leave-chama/{chama}',[ChamaController::class,'leaveChama'])->name("leave.chama") ;
    Route::post('approve-chama-member/{chama}',[ChamaController::class,'approveChamaMember'])->name("approve.chama.member") ;


});

Route::get('events',[EventController::class ,'index'])->name('event.index');
Route::get('createEvent',[EventController::class,'create'])->name('event.create');
Route::get('eventShow\{id}',[EventController::class,'show'])->name('event.show');
Route::post('eventStore',[EventController::class,'store'])->name('event.store');
Route::put('eventUpdate\{id}',[EventController::class, 'update'])->name('event.update');
Route::get('eventEdit\{id}',[EventController::class, 'edit'])->name('event.edit');
Route::delete('eventDestroy\{id}',[EventController::class,'destroy'])->name('event.destroy');
