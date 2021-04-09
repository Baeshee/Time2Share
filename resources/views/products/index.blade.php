@extends('default')

@section('content')

    <input class="js--search-box" placeholder="Search..." type="text" onkeyup="searchFunction()">

    <section class="filter-section">
        <select class="filter-section__select">
            <option value="All">All</option>
            @foreach ($categories as $category)
                <option value={{$category->category}}>{{$category->category}}</option>               
            @endforeach
        </select>
    </section> 

    <ul class="card-wrapper">
        @foreach ($products as $product)
            @include('products.gridCard')        
        @endforeach
    </ul>
@endsection