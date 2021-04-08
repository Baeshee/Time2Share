@extends('default')

@section('content')
    <section class="redirect-page">
        <section class="redirect-page__body">
            <h2>Item has been added to the server</h2>
            <p>Your item had been added and will be showed shortly on the homepage and on your profile</p>
        </section>
        <section class="redirect-page__buttons">
            <a class="button active redirect" href="/">Go to Home</a>
            <a class="button active redirect" href="/dashboard">Go to Account</a>
        </section> 
    </section>
@endsection