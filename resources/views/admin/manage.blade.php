@extends('default')

@section('content')
    <a class="back-link" href="/dashboard">Back to Account</a>
    <section class="manage-page__buttons">
        <section class="manage-page__buttons__section">
            <h2>Go to Users</h2>
            <a class="button active manage-macro" href="/manage/users">Manage Users</a>
        </section>
        <section class="manage-page__buttons__section">
            <h2>Go to Products</h2>
            <a class="button active manage-macro" href="/manage/products">Manage Products</a>
        </section>
        <section class="manage-page__buttons__section">
            <h2>Go to Reviews</h2>
            <a class="button active manage-macro" href="/manage/reviews">Manage Reviews</a>
        </section> 
    </section> 
@endsection