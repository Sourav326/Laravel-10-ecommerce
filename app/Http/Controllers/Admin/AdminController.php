<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use Hash;
use App\Models\Admin;
use File;

class AdminController extends Controller
{
    public function login(Request $request){
        if($request->isMethod('post')){
            $data = $request->all();
            if(Auth::guard('admin')->attempt(['email'=>$data['email'],'password'=>$data['password'],'status'=>1])){
                return redirect('admin/dashboard');
            } else {
                return redirect()->back()->with('error_message','Invalid Email or passswod');
            }
        }
        if(Auth::guard('admin')->user()){
            return redirect()->back()->with('error_message','You are already logged In');
        } else{
            return view('admin.auth.login');
        }
    }

    public function logout(){
        Auth::guard('admin')->logout();
        return redirect('admin/login')->with('success_message','Logout Successfully');
    }

    public function update(Request $request){
        if($request->isMethod('post')){
            $data = $request->all();
            if(Hash::check($data['currentpassword'],Auth::guard('admin')->user()->password)){
                if($data['newpassword'] == $data['password_confirmation']){
                    Admin::where('id',Auth::guard('admin')->user()->id)->update([
                        'password' => Hash::make($data['newpassword'])
                    ]);
                    return redirect()->back()->with('sucess_message',"Password updated successfully");
                } else {
                    return redirect()->back()->with('confirm_password_error',"confirm password doesn't match with new password");
                }
            } else {
                return redirect()->back()->with('current_password_error',"Current password is incorrect!");

            }
        }
        return view('admin.auth.update');

    }

    public function updateImage(Request $request){
        if($request->hasFile('adminimg')){
            $image_temp = $request->file('adminimg');
            if($image_temp->isValid()){
                $imageName = time().'.'.$request->file('adminimg')->getClientOriginalExtension();
                $path = $request->file('adminimg')->storeAs('images',$imageName,'public');
                $requestData['adminimg'] = '/storage/'.$path;

                $oldimage = 'storage/images/'.$request->current_admin_profile;
                if(File::exists($oldimage)){
                    File::delete($oldimage);
                }
            }
        } else {
            $imageName = $request->current_admin_profile;
        }
        Admin::where('id',Auth::guard('admin')->user()->id)->update([
            'name' => $request->name,
            'image' => $imageName
        ]);
        return redirect()->back()->with('sucess_message',"Personal details updated successfully");
        
    }


    public function createVendor(Request $request){
        if($request->isMethod('post')){
            $data = $request->all();
            
        }
        return view('admin.vendor.create');

    }
}
