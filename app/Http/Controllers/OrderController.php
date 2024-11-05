<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function detail(Request $request)
    {
        return view('user.order.detail');
    }
    
    public function create(Request $request)
    {
        return view('user.order.new');
    }
}
