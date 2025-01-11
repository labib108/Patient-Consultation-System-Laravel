<?php

namespace App\Http\Controllers;

use App\helper\JWTToken;
use App\Mail\OTPMail;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\View\View;

class UserController extends Controller
{
    function LoginPage():View{
        return view('pages.login.login');
    }
    function SendOtpPage():View{
        return view('pages.login.send_otp');
    }
    function VerifyOTPPage():View{
        return view('pages.login.verify_otp');
    }
    function ResetPasswordPage():View{
        return view('pages.login.reset-password');
    }

    function UserLogin(Request $request): \Illuminate\Http\JsonResponse
    {
        $count=User::where('email','=',$request->input('email'))
            ->where('password','=',$request->input('password'))
            ->select('id')->first();

        if($count!==null){
            $email = $request->input('email');
            return response()->json([
                'status' => 'success',
                'message' => 'User Login Successful',
            ], 200);
            // $token=JWTToken::CreateToken($email); //create token
            // return response()->json([
            //     'status' => 'success',
            //     'message' => 'User Login Successful',
            // ],200)->cookie('token',$token,60*24*30);
        }
        else{
            return response()->json([
                'status' => 'failed',
                'message' => 'unauthorized login'
            ],200);

        }
    }

    function SendOTPCode(Request $request): \Illuminate\Http\JsonResponse
    {
        $email=$request->input('email');
        $otp=rand(1000,9999);
        $count=User::where('email','=',$email)->count();

        if($count==1){
            // OTP Email Address
            Mail::to($email)->send(new OTPMail($otp));
            // OTO Code Table Update
            User::where('email','=',$email)->update(['otp'=>$otp]);

            return response()->json([
                'status' => 'success',
                'message' => '4 Digit OTP Code has been send to your email !'
            ],200);
        }
        else{
            return response()->json([
                'status' => 'failed',
                'message' => 'unauthorized'
            ]);
        }
    }

    function VerifyOTP(Request $request){
        $email=$request->input('email');
        $otp=$request->input('otp');
        $count=User::where('email','=',$email)
            ->where('otp','=',$otp)->count();

        if($count==1){
            // Database OTP Update
            User::where('email','=',$email)->update(['otp'=>'0']);

            /*
            // Pass Reset Token Issue
            $token=JWTToken::CreateTokenForSetPassword($request->input('email'));
            return response()->json([
                'status' => 'success',
                'message' => 'OTP Verification Successful',
            ],200)->cookie('token',$token,60*24*30);

            */
        }
        else{
            return response()->json([
                'status' => 'failed',
                'message' => 'unauthorized'
            ],200);
        }
    }

    function ResetPassword(Request $request): \Illuminate\Http\JsonResponse
    {
        try{
            $email=$request->header('email');
            $password=$request->input('password');
            User::where('email','=',$email)->update(['password'=>$password]);
            return response()->json([
                'status' => 'success',
                'message' => 'Request Successful',
            ],200);

        }catch (Exception $exception){
            return response()->json([
                'status' => 'fail',
                'message' => 'Something Went Wrong',
            ],200);
        }
    }

    function LogOut(): \Illuminate\Foundation\Application|\Illuminate\Routing\Redirector|\Illuminate\Http\RedirectResponse|\Illuminate\Contracts\Foundation\Application
    {
        return redirect('/');
    }
}