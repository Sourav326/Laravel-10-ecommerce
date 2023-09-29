<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;

class BrandController extends Controller
{
    public function show(Request $request){
        $id = $request->id;
        $brand = Brand::where('id',$id)->with('images')->first();
        return view('brand')->with('brand',$brand);
        
    }
}
