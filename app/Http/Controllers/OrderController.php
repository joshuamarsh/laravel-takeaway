<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Order;
use Auth;

class OrderController extends Controller
{
    public function index()
    {
        return view('order');
    }
    public function starter()
    {
        if (Order::where('userID', Auth::user()->id)->first())
        {

        }
        else
        {
            Order::create([
                'userID' => Auth::user()->id
            ]);
        }
        $items = DB::select('select * from items where category="starter"');
        return view('/menu/starter')->with('items', $items);
    }
    public function addtobasket(Request $itemdata)
    {
        $orderid = Order::where('userID', Auth::user()->id)->value('orderID');
        OrderItem::create([
            'itemID' => $itemdata->itemid,
            'orderID' => Auth::user()->id,
            'quantity' => $itemdata->quantity
        ]);
    }
}
