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

  </div>
@endsection