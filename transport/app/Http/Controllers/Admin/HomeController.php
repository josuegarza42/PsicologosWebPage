<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('admin.index');
    }

    public function settings(){
        return view('admin.settings');
    }

    public function tyc(){
        return view('admin.tyc');
    }
}
