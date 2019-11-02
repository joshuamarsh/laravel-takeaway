@extends('master')

@section('content')
  <div class="main-content">
    <div class="order-layout">
      <div class="order-menu">
        <div class="order-nav">
          <ul>
            <li>
              <a href="/order/starters">Starters</a>
            </li>
            <li>
              <a href="/order/mains">Mains</a>
            </li>
            <li>
              <a href="/order/sides-extras">Sides & Extras </a>
            </li>
            <li>
              <a href="/order/desserts">Desserts</a>
            </li>
          </ul>
        </div>
        <div class="items">
          @yield('items')
        </div>
      </div>
      <div class="side-basket">
        <div class="side-header">
          <p>Your Order</p>
        </div>
        <div class="side-content">
            @foreach ($basket as $item)
            <div class="side-item">
              <div class="side-quantity">
                <span>{{$item->quantity}}</span>
              </div>
              <div class="side-itemname">
                <span>{{$item->itemname}}</span>
              </div>
              <div class="side-itemprice">
                <p>&pound;{{$item->price}}</p>
              </div>
              <div class="side-image">
                <img src="/images/close.svg" alt="">
              </div>
            </div>
            @endforeach
        </div>
        <div class="side-footer">
          <a href="/checkout">Checkout</a>
        </div>
      </div>
    </div>
  </div>

@endsection