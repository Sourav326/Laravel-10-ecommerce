<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Otp;
use View;
use Illuminate\Http\Request;
use Auth;
use Mail;
use App\Mail\OtpMail;
use Session;

class OtpController extends Controller
{
    public function login(Request $request){
       
         $email = $request->email;
         $user  = User::where('email',$email)->first();
         if($user){
             $user->otp_verify = 0;
             if($user->save()){
                 $otp =  $this->resendOtp($user->id);
                 $mailData = [
                    'otp'=> $otp
                 ];
                Mail::to($email)->queue(new OtpMail($mailData));
                session()->flash('success', 'OTP Sent to Your Email Succcessfully');
                return view('auth.login-with-otp')->with('user',$user);
                
             }
         } else {
            return redirect()->back()->with('danger','Email not registered');
         }
    }

    public function register(Request $request){
        $email = $request->email;
        $name  = $request->name;
        $user  = User::where('email',$email)->first();
        if($user){
            return redirect()->back()->with('danger','Email already registered');
        } else {
            $user = new User;
            $user->name = $request->name;
            $user->email = $request->email;
            $user->save();
            $otp =  $this->resendOtp($user->id);
            $mailData = [
                'otp'=> $otp
            ];
            Mail::to($email)->queue(new OtpMail($mailData));
            session()->flash('success', 'OTP Sent to Your Email Succcessfully');
            return view('auth.register-with-otp')->with('user',$user);
            
        }
    }


     //Verify the OTP
     public function verifyOTP(Request $request){
            $request_otp = $request->otp;
            $id          = $request->id;
            $user        = User::find($id);
            $fetch_otp   = $user->otp['otp'];
            $expire_at   = $user->otp['expire_at'];
            date_default_timezone_set('Asia/Kolkata');
            $now = date('Y-m-d H:i:s');
            // dd($expire_at,$now);
            
            // if($now < $expire_at){
                if($request_otp == $fetch_otp){
                    
                    $user->otp_verify = 1;
                    // $user->status = 1;
                    $user->save();
                    $otp_to_delete = Otp::find($user->otp['id']);
                    $otp_to_delete->otp = 0;
                    $otp_to_delete->save();
                    Auth::login($user,true);
                    return redirect()->route('home')->with('success','Logged In Successfully');
                }else{
                    $request->session()->forget('success');
                    session()->flash('danger', 'Wrong OTP');
                    return view('auth.login-with-otp')->with('user',$user);
                }
            // } else {
            //         $request->session()->forget('success');
            //         session()->flash('danger', 'OTP Expired! Resend the Opt Again');
            //         return view('auth.login-with-otp')->with('user',$user);
            // }
       
    }

    public function resendVerifyOTP($id){
        $otp =  $this->resendOtp($id);
        $mailData = [
            'otp'=> $otp
         ];
        $user = User::find($id);
        $email = $user->email;
        Mail::to($email)->queue(new OtpMail($mailData));
        return redirect()->route('showView')->with('user',$user);
    }
    
    
    public function showView(){
        $user = Session::get('user');
        // dd(Session::get('user'));
        session()->flash('success', 'OTP Sent Again to Your Email Succcessfully');
        return view('auth.login-with-otp')->with('user',$user);
    }

     //Resend the OTP
     public function resendOtp($id){
        $otp = rand(10,1000000);
        $user = User::find($id);
        $user_id = User::find($id)->id;
        date_default_timezone_set('Asia/Kolkata');
        $now =  date('H:i:s', strtotime('+10 minutes'));
        $otpo = Otp::updateOrCreate(
            ['user_id' =>  $user_id],
            ['otp' => $otp],
            ['expire_at' => $now]
        );
        return $otp;
    }


    public function logout(){
        $user = Auth::user();
        $user->otp_verify=0;
        $user->save();
        Auth::logout();
        return redirect()->back()->with('success','Logout Successfully');
    }

    public function profile(){
        
        return view('profile.profile');
    }

}
