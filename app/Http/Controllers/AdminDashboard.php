<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminDashboard extends Controller
{
    public function admin() {
        return view('blogAdmin.admin');
    }
}
