@extends('default')

@section('content')
    <section class="redirect-page">
        <section class="redirect-page__body">
            <h2>Sorry but this account appears to be blocked</h2>
            <p>A admin made the decision to block this account due to breaking of the policy.</p>
            <p>If this shows without acknowledgement of breaking the policy contact the support at:</p>
            <p>service@t2s.com</p>
        </section>
        <section class="redirect-page__buttons">
            <a class="button active redirect" href="/">Go to Home</a>
        </section> 
    </section>
@endsection