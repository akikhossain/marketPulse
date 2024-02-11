<?php

namespace App\Http\Controllers\Admin;

use App\Models\Brand;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;


class BrandController extends Controller
{
   public function createForm()
   {
     return view('Admin.Pages.Brand.brand_form');
   }

   public function viewList()
   {   
        $brands =Brand::all();
        return view('Admin.Pages.Brand.brand_list' ,compact('brands'));
   }

   public function store(Request $request)

    {
        // dd($request->all());

        $validate = validator::make($request->all(), []);

        if ($validate->fails()) {
            return redirect()->back()->withErrors($validate);
        }
        //for file or image handling
        $fileName = null;
        if ($request->hasFile('brand_image')) {

            $file = $request->file('brand_image');
            $fileName = date('Ymdhis') . '.' . $file->getClientOriginalExtension();
            $file->storeAs('/uploads', $fileName);
        }

        //  dd($request->all());
        Brand::create([
            'brand_name' => $request->brand_name,
            'brand_image' => $request->brand_name,
            'description' => $request->description,
            'brand_image' => $fileName
        ]);
        notify()->success('Brand created Successfull!');
        return redirect()->back();
    }
}
