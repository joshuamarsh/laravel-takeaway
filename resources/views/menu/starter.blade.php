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
      <form method="POST" action="/addtobasket">
        @csrf
        <input type="hidden" name="itemid" value="{{$item->id}}">
        <button type="submit" class="item-add">ADD</button>
      </form>
    </div>
  @endforeach
@endsection