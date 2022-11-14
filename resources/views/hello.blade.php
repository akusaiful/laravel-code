@extends('layouts.bizland')

@section('title','Hello')

@section('content')
    <h1>Hello : {{ $name }}</h1>
    <h2>Age : {{ $age }}</h2>
@endsection
