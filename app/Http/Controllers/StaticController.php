<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticController extends Controller
{
    public function index() {
        return  view('welcome');

    }
    
    public function rating() {
        return view('rating');
    }

    public function test() {
        return view('test');
    }


}
