<?php

namespace App\Http\Controllers\Admin;

use App\Models\Brand;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;


class ProductController extends Controller
{
    public function createForm()

    {
        $categories = Category::all();
        $brands = Brand::all();
        return view('Admin.Pages.Product.product_form', compact('categories', 'brands'));
    }


    public function viewList()
    {
        $products = Product::with('category', 'brand')->get();
        return view('Admin.Pages.Product.product_list', compact('products'));
    }

    public function store(Request $request)

    {
        // dd($request->all());

        $rules = [
            'product_name' => 'required',
            'category_id' => 'required',
            'brand_id' => 'required',
            'price' => 'required|numeric',
            'quantity_in_stock' => 'required|numeric',
            'product_description' => 'required',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ];

        // Validate the request
        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        //for file or image handling
        $images = $request->file('images');

        $fileNames = [];

        foreach ($images as $key => $image) {
            $fileName = date('Ymdhis') . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('/uploads', $fileName);
            $fileNames[] = $fileName;
        }

        Product::create([
            'product_name' => $request->product_name,
            'category_id' => $request->category_id,
            'brand_id' => $request->brand_id,
            'price' => $request->price,
            'quantity_in_stock' => $request->quantity_in_stock,
            'product_description' => $request->product_description,
            'image1' => $fileNames[0] ?? null,
            'image2' => $fileNames[1] ?? null,
            'image3' => $fileNames[2] ?? null,
        ]);
        notify()->success('Product created Successfully!');
        return redirect()->back();
    }

    public function productDelete($id)
    {
        $product = Product::find($id);
        if ($product) {
            $product->delete();
        }
        notify()->success('Deleted Successfully.');
        return redirect()->back();
    }
}
