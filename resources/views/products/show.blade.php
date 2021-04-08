@extends('default')

@section('content')
    @include('products.card')   
    
    <h2 class="review-section-header">Lender Reviews</h2>
    @include('reviews.reviews')
@endsection