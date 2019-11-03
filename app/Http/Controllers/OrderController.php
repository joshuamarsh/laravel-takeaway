<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Order;
use App\OrderItem;
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
            $orderid = Order::where('userID', Auth::user()->id)->value('id');
            $basket = DB::table('order_items')->where('order_items.orderID', $orderid)
                            ->join('items', 'order_items.itemID', '=', 'items.id')
                            ->get();
        }
        else
        {
            Order::create([
                'userID' => Auth::user()->id
            ]);
        }
        $items = DB::select('select * from items where category="starter"');
        return view('/menu/starter')->with(['items' => $items, 'basket' => $basket]);
    }
    public function addtobasket(Request $itemdata)
    {
        $orderid = Order::where('userID', Auth::user()->id)->value('id');
        if (OrderItem::where(['orderID' => $orderid, 'itemID' => $itemdata->itemid])->first())
        {
            OrderItem::where(['orderID' => $orderid, 'itemID' => $itemdata->itemid])->first()->increment('quantity');
        }
        else
        {
            OrderItem::create([
                'itemID' => $itemdata->itemid,
                'orderID' => $orderid,
                'quantity' => 1
            ]);
        }
        return redirect()->back();
    }
    public function checkout()
    {
        $total = 0;
        $orderid = Order::where('userID', Auth::user()->id)->value('id');
        $basket = DB::table('order_items')->where('order_items.orderID', $orderid)
                        ->join('items', 'order_items.itemID', '=', 'items.id')
                        ->get();
        foreach($basket as $item){
            $total = $total + $item->quantity * $item->price;
        }
        $total = number_format((float)$total, 2, '.', '');
        return view('checkout')->with(['basket' => $basket, 'total' => $total]);
    }
}
