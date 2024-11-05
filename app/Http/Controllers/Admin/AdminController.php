<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard(Request $request)
    {
        return view('admin.dashboard');
    }

    public function profil(Request $request)
    {
        return view('admin.profil');
    }

    public function settings(Request $request)
    {
        return view('admin.pengaturan-akun');
    }
}
