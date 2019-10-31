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
          <div class="side-item">
            <div class="side-quantity">
              <span>1</span>
            </div>
            <div class="side-itemname">
              <span>Red Pepper Dip</span>
            </div>
            <div class="side-itemprice">
              <p>&pound;3.95</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection