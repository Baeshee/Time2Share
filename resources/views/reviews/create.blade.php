@extends('default')

@section('content')
    <section class="redirect-page">
        <section class="redirect-page__body">
            <h2>Write a review</h2>
        </section>
        <section class="redirect-page__review-form">
            <form method='post' action="/review">
                @csrf

                <section class="redirect-page__review-form-section">
                    <label for="product_name"> Name </label>
                    <select type='text' class="redirect-page__review-form__input" id="product_name" name="product_name">
                        @foreach ($products as $product)
                            <option class="redirect-page__review-form__option" value='{{$product->name}}'>{{$product->name}}</option>
                        @endforeach
                    </select>
                </section>

                <section class="redirect-page__review-form-section">
                    <label for="review_content"> Review </label>
                    <textarea class="redirect-page__review-form__input redirect-page__review-form__big" name="review_content" id="review_content" type="text-area"></textarea>
                </section>

                <section class="redirect-page__review-form-buttons redirect-page__buttons">
                    <a class="button active redirect-small" href="/">Go to Home</a>
                    <input class="button active redirect-small" type="submit" value="Send">
                </section>
            </form>
        </section>    
    </section>
@endsection