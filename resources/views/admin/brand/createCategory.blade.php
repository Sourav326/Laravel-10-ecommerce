@extends('admin.layouts.app')
@section('content')

<div class="row pb-4">
    <div class="col-sm-6">
        <h3 class="mb-0 font-weight-bold">Create Brand Category</h3>
    </div>
</div>

<div class="row">
    <div class="col-12 grid-margin">
        <form class="form-sample" method="post" action="{{route('admin.brands.category.create')}}" enctype=multipart/form-data>
            @csrf
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Brand Category Details</h4>
                    <p class="card-description">
                        Brand Category info
                    </p>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label >Category Name</label>
                                <input type="text" class="form-control" name="title" required>
                            </div>
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