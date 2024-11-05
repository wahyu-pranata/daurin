<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index(Request $request)
    {
        return view('admin.order.index');
    }
    
    public function detail(Request $request)
    {
        return view('admin.order.detail');
    }
}
