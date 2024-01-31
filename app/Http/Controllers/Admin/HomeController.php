<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function dashboard()
    {
        return view('Admin.Partial.dashboard');
    }


    public function home()
    {
        return view('Frontend.master');
    }
}
