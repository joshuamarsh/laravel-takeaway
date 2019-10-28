@extends('master')

@section('title', 'Stock')

@section('content')
  <div class="main-content">
    <div class="stock">
      <button>Add Item</button>
      <table class='stock-table'>
        <thead>
          <tr>
            <th scope='col'>ID</th>
            <th scope='col'>Name</th>
            <th scope='col'>Price</th>
            <th scope='col'>Category</th>
            <th scope='col'>Hot</th>
            <th scope='col'>V</th>
          </tr>
        </thead>
        <tbody>

        </tbody>
      </table>
    </div>
  </div>
  <div class="additem-modal">
    <form method="POST" action="{{ route('additem') }}">
      <label for="name">Item Name</label>
      <input type="text" name="name">
      <label for="price">Price</label>
      <input type="text" name="price">
      <label for="category">Category</label>
      <input type="text" name="category">
      <label for="hot">Hot</label>
      <input type="text" name="hot">
      <label for="vegatarian">Vegatarian</label>
      <input type="text" name="vegatarian">
      <button type="submit">Add</button>
    </form>
  </div>
  
@endsection