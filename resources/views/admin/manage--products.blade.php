@extends('default')

@section('content')
    <a class="back-link" href="/manage">Back to Manage</a>
    <h2 class="manage-header">Manage all products</h2>
    <ul class="manage-list">
        <li class="manage-list__item">
            <article>
                <section class="manage-list__item__container">
                    <p class="manage-list__item__value">Id</p>
                    <p class="manage-list__item__value">Name</p>
                    <p class="manage-list__item__value"></p>
                    <p class="manage-list__item__action">Action</p>
                </section>
            </article>
        </li>
        @if(count($products) != 0)
            @foreach ($products as $product)
                @include('admin.product--item')
            @endforeach
        @else
            <p class="no-entries">There are no products</p>
        @endif
    </ul>
@endsection