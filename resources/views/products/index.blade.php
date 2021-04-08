@extends('default')

@section('content')

    <input class="js--search-box" placeholder="Search..." type="text" onkeyup="searchFunction()">

    <section class="filter-section">
        <div class="filter-section__wrapper">
            <label class="filter-section__label" for="available">Available</label>
            <input class="filter-section__input" id="available" name="available" type="checkbox">
        </div>

        <div class="filter-section__wrapper">
            <label class="filter-section__label" for="unavailable">Unavailable</label>
            <input class="filter-section__input" id="unavailable" name="unavailable" type="checkbox">
        </div>

        <div class="filter-section__wrapper">
            <label class="filter-section__label" for="returning">Returning</label>
            <input class="filter-section__input" id="returning" name="returning" type="checkbox">
        </div>
    </section> 

    <ul class="card-wrapper">
        @foreach ($products as $product)
            @include('products.gridCard')        
        @endforeach
    </ul>
@endsection