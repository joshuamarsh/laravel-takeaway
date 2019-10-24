@extends('master')

@section('title', 'Homepage')

@section('content')
  <div class="main-content">
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
  </div>

@endsection