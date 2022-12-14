@extends('layouts.main')
@section('content')
<h1>Welcome Mr/Ms {{$users->name}}</h1>
<button><a href="{{route('logout')}}">Logout</a></button>
<button><a href="{{route('products')}}">Product List</a></button>
<button><a href="{{route('upload')}}">Upload a product</a></button>
@endsection