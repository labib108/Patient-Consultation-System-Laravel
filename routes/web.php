<?php

use App\Http\Controllers\appiontmentController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\patientController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\ReportController;
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

//Main Routs
Route::get('/',[HomeController::class,'HomePage']);
Route::get('/home',[HomeController::class,'HomePage'])->name('home');
Route::get('/about-us',[HomeController::class,'AboutPage'])->name('about-us');



//login post  API Routes
Route::post('/user-login',[UserController::class,'UserLogin']);
Route::post('/send-otp',[UserController::class,'SendOTPCode']);
Route::post('/verify-otp',[UserController::class,'VerifyOTP']);
Route::post('/reset-password',[UserController::class,'ResetPassword']);

//login  API Routes
Route::get('/login',[UserController::class,'LoginPage'])->name('login');
Route::get('/sendOtp',[UserController::class,'SendOtpPage']);
Route::get('/verifyOtp',[UserController::class,'VerifyOTPPage']);
Route::get('/resetPassword',[UserController::class,'ResetPasswordPage']);
Route::get('/logout',[UserController::class,'LogOut']);

//Dashboard Routs
Route::get('/dashboard',[DashboardController::class,'DashboardPage']);

//Apointment Routs
Route::get('/appointment',[appiontmentController::class,'appointmentPage']);
Route::get('/editAppointment/{id}',[appiontmentController::class,'editAppointment']);
Route::post('/updateappointment/{id}',[appiontmentController::class,'updateAppointment']);
Route::post('/newappointment',[appiontmentController::class,'NewAppointment']);

// Route::get('/appointment',[appiontmentController::class,'appointmentPage'])->middleware(TokenVerification::class);
// Route::get('/editAppointment/{id}',[appiontmentController::class,'editAppointment'])->middleware(TokenVerification::class);
Route::delete('/deleteappointment/{id}',[appiontmentController::class,'deleteappointment']);
Route::get('/client',[appiontmentController::class,'clientPage'])->middleware(TokenVerification::class);

//History Routs
Route::get('/history',[HistoryController::class,'historyPage'])->middleware(TokenVerification::class);
Route::post('/newHistory',[HistoryController::class,'NewHistory']);
Route::get('/editHistory/{id}',[HistoryController::class,'editHistory'])->middleware(TokenVerification::class);
Route::post('/updateHistory/{id}',[HistoryController::class,'updateHistory']);
Route::delete('/deleteHistory/{id}',[HistoryController::class,'deleteHistory']);


//Sop Routs
Route::get('/basicSoapPage',[soapController::class,'BasicSoap'])->middleware([TokenVerification::class]);
Route::post('/basicSoapQuestion', [soapController::class, 'saveAnswers'])->name('basicSoapQuestion.answers');
Route::get('/basicSoapReport', [soapController::class, 'basicReport'])->middleware([TokenVerification::class]);;
Route::get('/basicSoapReportData', [soapController::class, 'basicReportData'])->name('basicSoapReportData')->middleware([TokenVerification::class]);


Route::get('/generalSoapPage',[soapController::class,'GeneralSoap'])->middleware([TokenVerification::class])->name('generalSoapPage');
Route::post('/generalSoapQuestion', [soapController::class, 'saveGeneralAnswers'])->name('generalSoapQuestion.answers');
Route::get('/generalSoapReport', [soapController::class, 'generalReport'])->name('generalSoapReport')->middleware([TokenVerification::class]);;
Route::get('/generalSoapReportData', [soapController::class, 'generalReportData'])->name('generalSoapReportData')->middleware([TokenVerification::class]);

Route::get('/detailSoapPage',[soapController::class,'DetailSoap'])->middleware([TokenVerification::class]);
Route::post('/detailSoapQuestion', [soapController::class, 'saveDetailAnswers'])->name('detailSoapQuestion.answers');
Route::get('/detailSoapReport',[soapController::class,'detailSoapReport'])->name('detailSoapReport')->middleware([TokenVerification::class]);
Route::get('/detailSoapReportData',[soapController::class,'detailReportData'])->name('detailSoapReportData')->middleware([TokenVerification::class]);


//Repoet Routs
Route::get('/reportPage',[ReportController::class,'report'])->middleware([TokenVerification::class]);
Route::get('/fetch-data', [ReportController::class,'fetchData'])->name('fetch-data')->middleware([TokenVerification::class]);