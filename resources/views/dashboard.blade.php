@extends('default')

@section('content')
    <ul class="card-wrapper">
        @foreach ($products as $product)
            @include('products.gridCard')        
        @endforeach
    </ul>
@endsection
