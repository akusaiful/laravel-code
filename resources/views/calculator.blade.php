@extends('layouts.bizland')

@section('title','Calculator')

@section('content')
    <form action="">
        <input type="text" name="number" value="{{ $number }}">
        <input type="submit" value="Calculate" class="btn btn-primary">
    </form>


    <h1>Calculator : {{ $number }}</h1>

    @foreach (range(1, 12) as $key)
        {{ $key }} * {{ $number }} = {{ $key * $number }} <br />
    @endforeach
@endsection

@section('js')
