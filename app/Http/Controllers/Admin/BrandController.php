<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Brand;
use App\Models\BrandCategory;
use File;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $brands = Brand::paginate(4);
        return view('admin.brand.index')->with('brands',$brands);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        if($request->isMethod('post')){
            $is_available = Brand::where('title',$request->title)->first();
            if($is_available){
                return redirect()->back()->with('error_message',$request->title." Brand already available");
            } else {
                    $brand = new Brand;
                    $brand->title = $request->title;
                    if($request->hasFile('logo')){
                        $image_temp = $request->file('logo');
                        if($image_temp->isValid()){
                            $imageName = time().'.'.$request->file('logo')->getClientOriginalExtension();
                            $path = $request->file('logo')->storeAs('images/brands',$imageName,'public');
                        }
                    }
    
                    $brand->logo = $imageName;
                    $banners = $request->file('banners');
                    $category = $request->category;
                    if($brand->save()){
                        $brand->brandcategories()->attach($category);
                        if($request->hasFile('banners')){
                            foreach($banners as $key => $banner){
                                if($banner->isValid()){
                                    $imageName = time().'_'.$key.'.'.$banner->getClientOriginalExtension();
                                    $path = $banner->storeAs('images/brands/banner',$imageName,'public');
                                }
                            $brand->images()->create([
                                'url' => $imageName
                            ]);
                        }
                    }
                    return redirect()->back()->with('sucess_message',$request->title." Brand Added successfully");
                }
            }
        } else {
            $brandCategory = BrandCategory::all();
            return view('admin.brand.create')->with('brandCategory',$brandCategory);;
        }
    }

    

    /**
     * Store a newly created resource in storage.
     */
    public function updateStatus($id)
    {
        $brand = Brand::find($id);
        if($brand){
            if($brand->status){
                $brand->status = 0;
            } else{
                $brand->status=1;
            }
            if($brand->save()){
                return redirect()->back()->with('sucess_message',$brand->title." Brand status updated");
            }
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $is_available = Brand::where('id',$id)->first();
        if($is_available){
            $is_available->delete();
            return redirect()->back()->with('sucess_message'," Brand Deleted successfully");
        }
    }


    public function indexCategory(){
        $brandCategory = BrandCategory::paginate(3);
        return view('admin.brand.category')->with('brandCategory',$brandCategory);
    }



    public function createCategory(Request $request)
    {
        if($request->isMethod('post')){
            $is_available = BrandCategory::where('title',$request->title)->first();
            if($is_available){
                return redirect()->back()->with('error_message',$request->title." Brand Category already available");
            } else {
                $brandCategory = new BrandCategory;
                $brandCategory->title = $request->title;
                if($brandCategory->save()){
                    return redirect()->back()->with('sucess_message',$request->title." Brand Category Added successfully");
                } else{
                    return redirect()->back()->with('error_message',$request->title." category Not created due to some reason");
                }
            }

        } else {
            return view('admin.brand.createCategory');
        }
    }


     /**
     * Remove the specified resource from storage.
     */
    public function categoryDestroy($id)
    {
        $is_available = BrandCategory::where('id',$id)->first();
        if($is_available){
            $is_available->delete();
            return redirect()->back()->with('sucess_message'," Brand Category Deleted successfully");
        }
    }


     /**
     * Show and update the specified resource from storage.
     */

    public function categoryShow(Request $request,$id)
    {
        if($request->isMethod('post')){
           
                $brandCategory = BrandCategory::find($id);
                $brandCategory->title = $request->title;
                if($brandCategory->save()){
                    return redirect()->back()->with('sucess_message',$request->title." Brand Category Updated successfully");
                } else{
                    return redirect()->back()->with('error_message',$request->title." category Not updated due to some reason");
                }

        } else {
            $brandCategory = BrandCategory::find($id);
            if($brandCategory){
                return view('admin.brand.showCategory')->with('brandCategory',$brandCategory);
            } else {
                return redirect()->back()->with('error_message'," Brand Category not available");
            }
        }
    }

}
