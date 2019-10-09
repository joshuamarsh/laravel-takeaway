<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;


class HomeController extends Controller
{
    public function index()
    {
        $items = Item::all();

        return view('home', [
            'items' => $items
        ]);
    }
    public function addItem()
    {

        $item = new Item();

        $item->name = request('name');
        $item->price = request('price');
        $item->category = request('category');
        $item->hot = request('hot');
        $item->vegetarian = request('vegetarian');

        $item->save();
 
        return redirect('/');
    }
}
