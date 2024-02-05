<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
    public function viewList()
    {
        $categories = Category::all();
        return view('Admin.Pages.Category.category-list',  compact('categories'));
    }


    public function createForm()
    {
        return view('Admin.Pages.Category.category_form');
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $validate = Validator::make($request->all(), [
            'category_name' => 'required',
            'description' => 'required',
        ]);

        if ($validate->fails()) {
            notify()->error($validate->getMessageBag());
            return redirect()->back();
        }
        Category::create([
            'category_name' => $request->category_name,
            'description' => $request->description,
        ]);

        notify()->success('New Category Created successfully.');
        return redirect()->back();
    }
}
