<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function detail(Request $request)
    {
        return view('order.detail');
    }
}
