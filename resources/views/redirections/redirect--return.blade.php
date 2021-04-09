@extends('default')

@section('content')
    <section class="redirect-page">
        <section class="redirect-page__body">
            <h2>You have successfully returned the lend item</h2>
            <p>The item will be returned, we kindly ask you to leave a review for the owner to let them know about your experience.</p>
        </section>
        <section class="redirect-page__buttons">
            <a class="button active redirect" href="/">Go to Home</a>
            <a class="button active redirect" href="/review/create">Write a Review</a>
        </section> 
    </section>
@endsection