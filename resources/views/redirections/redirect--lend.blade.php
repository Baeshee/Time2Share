@extends('default')

@section('content')
    <section class="redirect-page">
        <section class="redirect-page__body">
            <h2>The item has been added to your lending list</h2>
            <p>We request you to return this item within the span of 2 weeks.</p>
        </section>
        <section class="redirect-page__buttons">
            <a class="button active redirect" href="/">Go to Home</a>
            <a class="button active redirect" href="/dashboard">Go to Account</a>
        </section> 
    </section>
@endsection