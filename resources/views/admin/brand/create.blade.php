@extends('admin.layouts.app')
@section('content')

<div class="row pb-4">
    <div class="col-sm-6">
        <h3 class="mb-0 font-weight-bold">Create Brand</h3>
    </div>
</div>

<div class="row">
    <div class="col-12 grid-margin">
        <form class="form-sample" method="post" action="{{route('admin.brands.create')}}" enctype=multipart/form-data>
            @csrf
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Brand Details</h4>
                    <p class="card-description">
                        Brand info
                    </p>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label >Brand Name</label>
                                <input type="text" class="form-control" name="title" required>
                            </div>
                        </div>
                        
                        <div class="col-md-2">
                            <div class="form-group ">
                                <label >Brand Category</label>
                                <select name="category" id="category" class="form-control multi-select">
                                    @foreach ($brandCategory as $item)
                                        <option value="{{$item->id}}">{{$item->title}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">

                    <div class="row">
                        <div class="col-md-9">
                            <div class="form-group">
                                <label >Brand Logo</label>
                                <input type="file" name="logo" class="file-upload-default" id="selectedImage"
                                    accept="image/*">
                                <div class="input-group col-sm-12">
                                    <input type="text" class="form-control file-upload-info" disabled=""
                                        placeholder="Upload Image">
                                    <span class="input-group-append">
                                        <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                                    </span>
                                </div>
                            </div>
                        </diV>
                        <div class="col-md-3 d-flex align-items-center">
                        <img src="{{asset('storage/images/1695538611.png')}}" alt="user Image" id="target" width="100%" height="50px"/>
                        </div>
                    </div>

                        </div>
                    </div>

                    <div class="form-group">
                        <label>Brand Banners</label>
                        <input type="file" name="banners[]" class="file-upload-default" id="imageInput" accept="image/*"
                            multiple>
                        <div class="input-group col-xs-12">
                            <input type="text" class="form-control file-upload-info" disabled=""
                                placeholder="Upload Image">
                            <span class="input-group-append">
                                <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                            </span>
                        </div>
                        <input type="hidden" value="1695148955.png" name="current_admin_profile">
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div id="imagePreviews"></div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <button type="reset" class="btn btn-light">Cancel</button>
                </div>
            </div>
        </form>
    </div>
</diV>

@endsection