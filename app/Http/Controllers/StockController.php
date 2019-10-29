<?php

namespace App\Http\Controllers;

use App\Item;
use Illuminate\Http\Request;

class StockController extends Controller
{
    public function index()
    {
        return view("stock");
    }
    public function additem(Request $itemdata)
    {
        Item::create([
            'itemname' => $itemdata->name,
            'price' => $itemdata->price,
            'category' => $itemdata->category,
            'hot' => $itemdata->hot,
            'vegetarian' => $itemdata->vegetarian
        ]);

        return redirect('/stock');
    }
}
