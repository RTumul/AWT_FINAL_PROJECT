@extends('layouts.main')
@section('content')
        <button><a href="{{route('index.registration')}}">Registration</a></button>
        <button><a href="{{route('public.login')}}">Login</a></button>
@endsection