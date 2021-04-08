<li data-product-status="{{$product->status}}">
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
                @if($product->status == 'Lend Out')
                    <form>
                        @csrf
                        <input class="button disabled" type="submit" value="Lend">
                    </form>
                @else
                    <form method="post" action="/lend">
                        @csrf
                        <input class="button active" type="submit" value="Lend">
                        <input class="hidden" type='number' name='id' value='{{$product->id}}'/>
                    </form>
                @endif
            </section>
        </section>
    </article>
</li>