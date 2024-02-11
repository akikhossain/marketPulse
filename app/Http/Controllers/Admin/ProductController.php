<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    public function createForm()

    {
        $categories =Category::all();
        return view('Admin.Pages.Product.product_form',compact('categories'));
    }

    public function viewList()
    {   $products = Product::with('category');
        return view('Admin.Pages.Product.product_list',compact('products'));
    }

    public function store(Request $request)
    {
        dd($request->all());
        $validate = validator::make($request->all(), [
    ]);

    if ($validate->fails()) {
      return redirect()->back()->withErrors($validate);
    }

    //for file or image handling
    $fileName = null;
    if ($request->hasFile('image1')) {

      $file = $request->file('image1');
      $fileName = date('Ymdhis') . '.' . $file->getClientOriginalExtension();
      $file->storeAs('/uploads', $fileName);
    }

    //  dd($request->all());
    Product::create([
      'product_name' => $request->product_name,
      'category_id' => $request->category_id,
      'brand' => $request->brand_id,
      'image1' => $request->image1,
      'image2' => $request->image2,
      'image3' => $request->image3,
      'price' => $request->price,
      'quantity_in_stock' => $request->quantity_in_stock,
      'product_description' => $request->product_description,
      'image1' => $fileName
    ]);
    notify()->success('Product created Successfull!');
    return redirect()->back();
    }
}
