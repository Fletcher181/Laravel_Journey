<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class StaffController extends Controller
{
    public function Dashboard() {
        if (Auth::check() && Auth::user()->role=="admin") {
            return view('admin.dashboard');
        } else if (Auth::check()) {
            return view('dashboard');
        } else {
            return redirect('/');
        }
    }
}
