<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class UserController extends Controller
{
    public function createForm()
    {
        return view('Admin.Pages.User.user_form');
    }

    public function viewList()
    {   $users = User::all();
        return view('Admin.Pages.User.user_list',compact('users'));
    }

    public function store( Request $request)
    {
        // dd($request->all());
        $rules = [
            'name' => 'required',
            'email' => 'required',
            'contact' => 'required',
            'role' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ];

        $validate = validator::make($request->all(), $rules);

        if ($validate->fails()) {
            return redirect()->back()->withErrors($validate)->withInput();
        }
        //for file or image handling
        $fileName = null;
        if ($request->hasFile('image')) {

            $file = $request->file('image');
            $fileName = date('Ymdhis') . '.' . $file->getClientOriginalExtension();
            $file->storeAs('/uploads', $fileName);
        }

        //  dd($request->all());
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'contact' => $request->contact,
            'role' => $request->role,
            'image' => $fileName
        ]);
        notify()->success('User created Successfull!');
        return redirect()->back();
    }
}
