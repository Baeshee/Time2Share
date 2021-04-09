@extends('default')

@section('content')
    @include('products.card')   
    <a class="back-link" href="/">Back to Products</a>
    <h2 class="review-section-header">Reviews</h2>
    @include('reviews.reviews')
@endsection