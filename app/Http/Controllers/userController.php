<?php

namespace App\Http\Controllers;

use App\Helper\JWTtoken;
use App\Models\User;
use App\Mail\OTPmail;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class userController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email'
        ]);
        try {
            $email = $request->input('email');
            $otp = rand(1000, 9999);
            Mail::to($email)->send(new OTPmail($otp));
            User::updateOrCreate(
                ['email' => $email],
                [
                    'email' => $email,
                    'otp' => $otp
                ]
            );
            return response()->json([
                'status' => 'success',
                'msg' => 'otp code has been sent'
            ]);
        } catch (Exception $e) {
            return response()->json([
                'status' => 'error',
                'msg' => $e->getMessage()
            ]);
        }
    }
    public function verifyLogin(Request $request)
    {
        $email = $request->input('email');
        $otp = $request->input('otp');
        $user = User::where('email', $email)->where('otp', $otp)->first();
        if ($user) {
            User::where('email', $email)->where('otp', $otp)->update(['otp' => '0']);
            $token = JWTtoken::createToken($user->email, $user->id);
            return response()->json([
                'status' => 'success',
                'msg' => 'Login Success'
            ])->cookie('token', $token, 60 * 24 * 30);
        } else {
            return response()->json([
                'status' => 'error',
                'msg' => 'cannot find'
            ]);
        }
    }
    public function logout()
    {
        return redirect('/login')->cookie('token', null, -1);
    }
}
