<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        return view('order');
    }
    public function starter()
    {
        return view('/menu/starter');
    }
}
