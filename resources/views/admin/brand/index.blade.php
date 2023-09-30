@extends('admin.layouts.app')
@section('content')
<div class="row pb-4">
    <div class="col-sm-6">
        <h3 class="mb-0 font-weight-bold">Brand List</h3>
    </div>
</div>
<div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">

                        <h4 class="card-title">Brand Details</h4>
                        <a href="{{route('admin.brands.create')}}">
                        <button type="button" class="btn btn-success btn-icon-text">
                        <i class="typcn typcn-input-checked btn-icon-prepend"></i>                                                   
                                Add Brand
                              </button>
                              </a>
                    </div>
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
                            Status
                          </th>
                          <th>
                            Category
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
                        @forelse($brands as $brand)
                        <tr>
                          <td class="py-1">
                            <img src="{{asset('storage/images/brands').'/'.$brand->logo}}" alt="{{$brand->logo}}">
                          </td>
                          <td>
                            {{$brand->title}}
                          </td>
                          <td>
                            <a href="{{route('admin.brands.updateStatus',['id' => $brand->id])}}">
                                @if($brand->status == 0)
                                    <label class="badge badge-success">Active</label>
                                @else
                                    <label class="badge badge-danger">Deactive</label>
                                @endif
                            </a>
                          </td>
                          <td>
                          @foreach($brand->brandcategories as $brandcategory)
                            {{$brandcategory->title}}
                          @endforeach
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
                    {{ $brands->links() }}
                  </div>
                </div>
              </div>
            </div>
@endsection