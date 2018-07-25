@extends('layouts.app')

@section('content')
    @foreach($beverages as $beverage)
        <p>
            {{ $beverage->name }}
        </p>
    @endforeach
@endsection
