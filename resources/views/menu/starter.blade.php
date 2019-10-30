@extends('/menu/order-master')

@section('title', 'Starters')

@section('items')
  @foreach($items as $item)
    <div class="item">
      <div class="item-name">
        <p>{{$item->itemname}}</p>
      </div>
      <div class="item-price">
        <p>
          <span>&pound;{{$item->price}}</span>
        </p>
      </div>
      <button class="item-add">ADD</button>
    </div>
  @endforeach
@endsection