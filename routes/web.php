<?php

use App\Http\Controllers\appiontmentController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\patientController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\soapController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\TokenVerification;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// login API Routes
Route::get('/',[UserController::class,'LoginPage']);

Route::post('/user-login',[UserController::class,'UserLogin']);
Route::post('/send-otp',[UserController::class,'SendOTPCode']);
Route::post('/verify-otp',[UserController::class,'VerifyOTP']);
Route::post('/reset-password',[UserController::class,'ResetPassword']);

Route::get('/login',[UserController::class,'LoginPage']);
Route::get('/sendOtp',[UserController::class,'SendOtpPage']);
Route::get('/verifyOtp',[UserController::class,'VerifyOTPPage']);
Route::get('/resetPassword',[UserController::class,'ResetPasswordPage']);
Route::get('/logout',[UserController::class,'LogOut']);

Route::get('/dashboard',[DashboardController::class,'DashboardPage'])->middleware([TokenVerification::class]);
Route::get('/appointment',[appiontmentController::class,'appointmentPage'])->middleware(TokenVerification::class);
Route::post('/newappointment',[appiontmentController::class,'NewAppointment']);


Route::get('/basicSoapPage',[soapController::class,'BasicSoap'])->middleware([TokenVerification::class]);

Route::get('/generalSoapPage',[soapController::class,'GeneralSoap'])->middleware([TokenVerification::class]);
Route::get('/detailSoapPage',[soapController::class,'DetailSoap'])->middleware([TokenVerification::class]);


