<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{ 
    public function viewList(){
        return view('Admin.Pages.Category.category-list');
    }


    public function createForm(){
        return view('Admin.Pages.Category.category_form');
    }

    public function store(Request $request){
        dd($request->all());
        Category::create([
         'name' =>$request->category_name,
         'description' =>$request->description_name
        ]);
    }
}
