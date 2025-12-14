<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController
{
    function index(){
        return view('admin.dashboard');
    }   
}
