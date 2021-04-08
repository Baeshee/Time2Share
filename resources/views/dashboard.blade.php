@extends('default')

@section('content')
    <a class="logout-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();">Logout</a>
    @if($user->role == 'Admin')
        <a class="manage-link" href="/manage">Manage</a>
    @endif
    <h2 class="dashboard-headers">Lend Products</h2>
    <ul class="card-wrapper">
        @if(count($lend_products) != 0)
            @foreach ($lend_products as $lend_product)
                @include('products.lendCard')        
            @endforeach
        @else
            <p class="dashboard-placeholder">There are no lend items</p>
        @endif
    </ul>

    <h2 class="dashboard-headers">Owned Products</h2>
    <ul class="card-wrapper">
        @foreach ($products as $product)
            @include('products.ownedCard')        
        @endforeach
    </ul>
@endsection
