@extends('default')

@section('content')
@foreach($products as $product)
    @include('users.card')
@endforeach 
@endsection