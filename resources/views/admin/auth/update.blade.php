@extends('admin.layouts.app')
@section('content')

<div class="row pb-4">
    <div class="col-sm-6">
        <h3 class="mb-0 font-weight-bold">Update Profile</h3>
    </div>
</div>

<div class="row">
    <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Update Password</h4>
                <p class="card-description">
                    You can update your password, Email can't be changed
                </p>
                <form class="forms-sample" method="post" action="{{route('admin.profile.update')}}">
                    @csrf
                    <div class="form-group row">
                        <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Email</label>
                        <div class="col-sm-9">
                            <input type="email" value="{{auth()->guard('admin')->user()->email}}" class="form-control"
                                id="exampleInputEmail2" placeholder="Email" disabled>
                            <input type="hidden" value="{{auth()->guard('admin')->user()->email}}" name="email">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="exampleInputMobile" class="col-sm-3 col-form-label">Admin Type</label>
                        <div class="col-sm-9">
                            <input type="text" value="{{auth()->guard('admin')->user()->type}}" class="form-control"
                                id="exampleInputMobile" placeholder="Admin Type" disabled>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Current Password</label>
                        <div class="col-sm-9">
                            <input type="password" class="form-control" id="exampleInputPassword2"
                                placeholder="Current Password" name="currentpassword" required>
                            @if(Session::has('current_password_error'))
                            <span class="input_error">{{Session::get('current_password_error')}}</span>
                            @endif

                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="exampleInputPassword2" class="col-sm-3 col-form-label">New Password</label>
                        <div class="col-sm-9">
                            <input type="password" class="form-control" id="exampleInputPassword2"
                                placeholder="New Password" name="newpassword" required>

                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="exampleInputConfirmPassword2" class="col-sm-3 col-form-label">Confirm
                            Password</label>
                        <div class="col-sm-9">
                            <input type="password" class="form-control" id="exampleInputConfirmPassword2"
                                placeholder="Password" name="password_confirmation" required>
                            @if(Session::has('confirm_password_error'))
                            <span class="input_error">{{Session::get('confirm_password_error')}}</span>
                            @endif

                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <button type="reset" class="btn btn-light">Cancel</button>
                </form>
            </div>
        </div>
    </div>

    <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Update Personal Details</h4>
                <p class="card-description">
                    Here you can update your personal details
                </p>
                <form class="forms-sample" method="post" action="{{route('admin.profile.updateImage')}}"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                        <label for="exampleInputMobile" class="col-sm-3 col-form-label">Name</label>
                        <div class="col-sm-9">
                            <input type="text" value="{{auth()->guard('admin')->user()->name}}" class="form-control"
                                id="exampleInputMobile" placeholder="name" name="name">
                        </div>
                    </div>
                    <div>
                        <div class="admin-profile-image">
                            @if(auth()->guard('admin')->user()->image)
                            <img src="{{asset('storage/images').'/'.auth()->guard('admin')->user()->image}}"
                                alt="user Image" id="target" />
                            @else
                            <img src="{{asset('assets/images/admin-profile.png')}}" alt="user Image" id="target" />
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Upload Profile</label>
                            <input type="file" name="adminimg" class="file-upload-default" id="selectedImage">
                            <div class="input-group col-xs-12">
                                <input type="text" class="form-control file-upload-info" disabled=""
                                    placeholder="Upload Image">
                                <span class="input-group-append">
                                    <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                                </span>
                            </div>
                            <input type="hidden" value="{{auth()->guard('admin')->user()->image}}"
                                name="current_admin_profile">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <button type="reset" class="btn btn-light">Cancel</button>
                </form>
            </div>
        </div>
    </div>



    @endsection