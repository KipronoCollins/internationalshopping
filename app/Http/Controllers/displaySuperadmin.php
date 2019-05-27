<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class displaySuperadmin extends Controller
{
    public function displaymanageusers()
    {
        return view('superadmin/manageusers');
    }
}
