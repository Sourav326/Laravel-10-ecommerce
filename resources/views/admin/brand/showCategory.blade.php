@extends('admin.layouts.app')
@section('content')

<div class="row pb-4">
    <div class="col-sm-6">
        <h3 class="mb-0 font-weight-bold">Brand Category</h3>
    </div>
</div>

<div class="row">
    <div class="col-6 grid-margin">
        <form class="form-sample" method="post"
            action="{{route('admin.brands.catgory.show',['id' => $brandCategory->id])}}" enctype=multipart/form-data>
            @csrf
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Brand Category Details</h4>
                    <p class="card-description">
                        Brand Category info
                    </p>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Category Name</label>
                                <input type="text" class="form-control" name="title" value="{{$brandCategory->title}}"
                                    required>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Update</button>
                </div>
            </div>
        </form>
    </div>





    <div class="col-lg-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Brand Details of the category</h4>
                <p class="card-description">
                    Brands Linked with the Category
                </p>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>
                                    Brand Logo
                                </th>
                                <th>
                                    Brand Title
                                </th>
                                <th>
                                    Created date
                                </th>
                                <th>
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($brandCategory->brands as $brand)
                            <tr>
                                <td class="py-1">
                                    <img src="{{asset('storage/images/brands').'/'.$brand->logo}}"
                                        alt="{{$brand->logo}}">
                                </td>
                                <td>
                                    {{$brand->title}}
</td>
                                <td>
                                    {{date_format($brand->created_at,"M d Y")}}
                                </td>
                                <td>
                                    <!-- <label class="badge badge-info">View</label> -->
                                    <a href="{{route('admin.brands.delete',['id' => $brand->id])}}">
                                        <label class="badge badge-danger">Delete</label>
                                    </a>
                                </td>
                            </tr>
                            @empty
                            <p>No Brands Available</p>
                            @endforelse

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection