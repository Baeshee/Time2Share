@extends('default')

@section('content')
    <section class="redirect-page">
        <section class="redirect-page__body">
            <h2>Add a product</h2>
        </section>
        <section class="redirect-page__product-form">
            <form method='post' action="/product">
                @csrf

                <section class="redirect-page__product-form-section">
                    <label for="name"> Product Name </label>
                    <input class="redirect-page__product-form__input" name="name" id="name" type="text"></input>
                </section>

                <section class="redirect-page__product-form-section">
                    <label for="image"> Image (Url) </label>
                    <input class="redirect-page__product-form__input" name="image" id="image" type="text"></input>
                </section>

                <section class="redirect-page__product-form-section">
                    <label for="category"> Category </label>
                    <select class="redirect-page__product-form__input" id="category" name="category">
                        @foreach ($categories as $category)
                            <option value={{ $category->category }}>{{ $category->category }}</option>
                        @endforeach
                    </select>
                </section>

                <section class="redirect-page__product-form-section">
                    <label for="description"> Description </label>
                    <textarea class="redirect-page__product-form__input redirect-page__product-form__big" name="description" id="description" type="text-area"></textarea>
                </section>

                <section class="redirect-page__product-form-buttons redirect-page__buttons">
                    <a class="button active redirect-small" href="/">Go to Home</a>
                    <input class="button active" type="submit" value="Send">
                </section>
            </form>
        </section>    
    </section>
@endsection