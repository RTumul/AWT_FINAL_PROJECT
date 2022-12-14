@extends('layouts.main')
@section('content')
<form method="post" action="">
  
  @csrf
  Email: <input type="text" name="email" value="{{old('email')}}"><br>
  @error('email')
  {{$message}}<br>
  @enderror

  Password: <input type="password" name="password" value="{{old('password')}}"><br>
  @error('password')
  {{$message}}
  @enderror

  <input type="submit" value="login">
</form>
@endsection