@extends('layouts.main')
@section('content')
<form action='' method="POST" enctype="multipart/form-data">
      {{@csrf_field()}}
      <h1>Upload Product</h1>
      <label>Name: </label>
      <input type="text" name="name" value="{{old('name')}}">
      <br/>
      <label>Price: </label>
      <input type="text" name="price" value="{{old('price')}}">
      <br/>
      <label>Upload Photo: </label>
      <input type="file" name="productImage" accept="image/jpg, image/png, image/jpeg">
      <br/>
      <input type="submit" value="upload">
</form>
@endsection