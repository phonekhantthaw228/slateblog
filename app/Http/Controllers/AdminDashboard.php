<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminDashboard extends Controller
{
    public function admin() {
        $users = User::all();
        return view('blogAdmin.admin', compact('users'));
    }
}
