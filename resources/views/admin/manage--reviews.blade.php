@extends('default')

@section('content')
    <a class="back-link" href="/manage">Back to Manage</a>
    <h2 class="manage-header">Manage all reviews</h2>
    <ul class="manage-list">
        <li class="manage-list__item">
            <article>
                <section class="manage-list__item__container">
                    <p class="manage-list__item__value">Id</p>
                    <p class="manage-list__item__value">Name</p>
                    <p class="manage-list__item__value">Lender Email</p>
                    <p class="manage-list__item__action">Action</p>
                </section>
            </article>
        </li>
        @if(count($reviews) != 0)
            @foreach ($reviews as $review)
                @include('admin.review--item')
            @endforeach
        @else
            <p class="no-entries">There are no reviews</p>
        @endif
    </ul>
@endsection