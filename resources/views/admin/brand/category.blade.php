@extends('admin.layouts.app')
@section('content')
<div class="row pb-4">
    <div class="col-sm-6">
        <h3 class="mb-0 font-weight-bold">Brand Category List</h3>
    </div>
</div>
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <div class="d-flex justify-content-between align-items-center">

                <h4 class="card-title">Brand Category Details</h4>
                <a href="{{route('admin.brands.category.create')}}">
                    <button type="button" class="btn btn-success btn-icon-text">
                        <i class="typcn typcn-input-checked btn-icon-prepend"></i>
                        Add Brand Category
                    </button>
                </a>
            </div>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>
                                Catgory Title
                            </th>
                            <th>
                                Brands
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
                        @forelse($brandCategory as $brandCat)
                        <tr>
                            <td>
                                {{$brandCat->title}}
                            </td>
                            <td>
                                
                                @foreach($brandCat->brands as $brand)
                                {{$brand->title.","}}
                                @endforeach
                            </td>
                            <td>
                            {{date_format($brandCat->created_at,"M d Y")}}
                            </td>
                            <td>
                                <a href="{{route('admin.brands.catgory.show',['id' => $brandCat->id])}}">
                                    <label class="badge badge-info">View</label>
                                </a>
                                <a href="{{route('admin.brands.catgory.delete',['id' => $brandCat->id])}}">
                                    <label class="badge badge-danger">Delete</label>
                                </a>
                            </td>
                        </tr>
                        @empty
                        <p>No Brands Categories Available</p>
                        @endforelse

                    </tbody>
                </table>
                {{ $brandCategory->links() }}
            </div>
        </div>
    </div>
</div>
@endsection