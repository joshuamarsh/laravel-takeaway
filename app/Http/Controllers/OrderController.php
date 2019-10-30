<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function index()
    {
        return view('order');
    }
    public function starter()
    {
        $items = DB::select('select * from items where category="starter"');
        return view('/menu/starter')->with('items', $items);
    }
}
