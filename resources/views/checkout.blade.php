@extends('master')

@section('title', 'Checkout')

@section('content')
  <div class="main-content">
    <div class="checkout">
      <h1>Confirm your order</h1>
      <div class="basket-time">
        <span>Collection time</span>
        <select name="time" id="time">
            <option value="asap">ASAP</option>
            <option value="2019-11-03T18:15:00">Sunday 18:15</option>
            <option value="2019-11-03T18:20:00">Sunday 18:20</option>
            <option value="2019-11-03T18:25:00">Sunday 18:25</option>
            <option value="2019-11-03T18:30:00">Sunday 18:30</option>
        </select>
      </div>
      <div class="basket-table">
        <table class='stock-table'>
          <thead>
            <tr>
              <th scope='col'>Item Name</th>
              <th scope='col'>Price</th>
              <th scope='col'>Quantity</th>
              <th scope='col'>Total</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($basket as $item)
              <tr>
                <td>{{$item->itemname}}</td>
                <td>&pound;{{$item->price}}</td>
                <td>{{$item->quantity}}</td>
                <td>&pound;{{number_format((float)$item->quantity * $item->price, 2, '.', '')}}</td>
              </tr>
            @endforeach
            <tr>
              <td></td>
              <td></td>
              <td></td>
              <td>&pound;{{$total}}</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

@endsection