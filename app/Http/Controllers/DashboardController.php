<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
//use Hash;
//use Str;

class DashboardController extends Controller
{
    public function admin_dashboard(Request $request)
    {
        //return view('admin.dashboard');
        echo "Admin";
        die();
    }

    public function user_dashboard(Request $request)
    {
        //return view('user.dashboard');
        echo "user";
        die();
    }

    public function vendor_dashboard(Request $request)
    {
        //return view('vendor.dashboard');
        echo "Vendor";
        die();
    }
}
