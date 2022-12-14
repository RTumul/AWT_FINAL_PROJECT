@extends('layouts.main')
@section('content')
<h1>Product List</h1>
<table border='1'>
  <tr>
    <th>Product Name</th>
    <th>Product Price</th>
    <th>Product Image</th>
  </tr>
  @foreach($product as $pro)
        <tr>
            <td>{{$pro->name}}</td>
            <td>{{$pro->price}}</td>
            <td><img src="{{asset('storage/product_image')}}/{{$pro->image}}" alt="Customer icon" style="width: 350px;"></td>
            <td><button><a href="/product/details/edit/{{$pro->id}}">Update</a></button></td>
            <td><button><a href="/product/delete/{{$pro->id}}">Delete</a></button></td>
        </tr>
        
    @endforeach
</table>
@endsection