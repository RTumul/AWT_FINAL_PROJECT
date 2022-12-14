@extends('layouts.main')
@section('content')
    <form method="post" action="">
        {{@csrf_field()}}
        Name: <input type="text" name="name" placeholder="Name" value="{{old('name')}}"><br>
        @error('name')
            {{$message}}<br>
        @enderror
        Email: <input type="text" name="email" placeholder="Email"><br>
        @error('email')
            {{$message}} <br>
        @enderror
        Dob: <input type="date" name="dob"><br>
        @error('dob')
            {{$message}}<br>
        @enderror
        Password: <input type="password" name="password" ><br>
        @error('password')
            {{$message}}<br>
        @enderror
        Confirm Password: <input type="password" name="conf_password"><br>
        @error('conf_password')
            {{$message}}<br>
        @enderror
        Address: <input type="text" name="address" placeholder="Address" value="{{old('address')}}"><br>
        @error('address')
            {{$message}}<br>
        @enderror
        <input type="submit" value="Create">
    </form>
@endsection