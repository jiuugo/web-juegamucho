<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;

class HomeController
{
    public function index(){
        $data = [
            'legoArticles' => Brand::find(1)->articles
        ];
        return view('home');
    }
}
