@extends('default')

@section('content')
    <section class="redirect-page">
        <section class="redirect-page__body">
            <h2>Item has been accepted</h2>
            <p>You have accepted the return, everything else will be handled by us.</p>
        </section>
        <section class="redirect-page__buttons">
            <a class="button active redirect" href="/">Go to Home</a>
            <a class="button active redirect" href="/dashboard">Go to Account</a>
        </section> 
    </section>
@endsection