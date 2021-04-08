<li data-product-status="{{$product->status}}">
    <a href="/products/{{$product->id}}">
        <article class="card">
            <figure class="card__image">
                <img src="{{$product->image}}" alt="Photo of {{$product->name}}">
            </figure>
            <section class="card__body">
                <section class="card__body__text">
                    <h2 class="js--card__body__title">{{$product->name}}</h2>
                    <p>{{$product->description}}</p>
                    <p>{{$product->owner_email}}</p>
                    @if($product->status == 'Unavailable')
                    <p class="red">{{$product->status}}</p>
                    @else
                    <p class="green">{{$product->status}}</p>
                    @endif
                </section>   
                <section class="card__body__buttons">
                    @if($product->status == 'Unavailable')
                        <form method="get" action="">
                            @csrf
                            <input class="button disabled" type="submit" value="Lend">
                        </form>
                    @else
                        <form method="get" action="https://google.com/">
                            @csrf
                            <input class="button" type="submit" value="Lend">
                        </form>
                    @endif
                </section>
            </section>
        </article>
    </a>
</li>