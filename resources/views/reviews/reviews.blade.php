<section class="review-wrapper">
    @foreach ($reviews as $review)
        @include('reviews.reviewCard')
    @endforeach
</section>