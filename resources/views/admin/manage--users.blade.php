@extends('default')

@section('content')
    <a class="back-link" href="/manage">Back to Manage</a>
    <h2 class="manage-header">Manage all users</h2>
    <ul class="manage-list">
        <li class="manage-list__item">
            <article>
                <section class="manage-list__item__container">
                    <p class="manage-list__item__value">Id</p>
                    <p class="manage-list__item__value">Name</p>
                    <p class="manage-list__item__value">Status</p>
                    <p class="manage-list__item__action">Action</p>
                </section>
            </article>
        </li>
        @if(count($users) != 0)
            @foreach ($users as $user)
                @if($user->role != 'Admin')
                    @include('admin.user--item')
                @endif
            @endforeach
        @else
            <p class="no-entries">There are no users</p>
        @endif
    </ul>
@endsection