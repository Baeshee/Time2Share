<li data-product-status="{{$product->status}}">
    <a href="/products/{{$product->id}}">
        <article class="gridCard">
            <figure class="gridCard__image">
                <img src="{{$product->image}}" alt="Photo of {{$product->name}}">
            </figure>
            <section class="gridCard__body">
                <section class="gridCard__body__text">
                    <h2 class="js--gridCard__body__title">{{$product->name}}</h2>
                    <p>{{$product->description}}</p>
                    @if($product->status == 'Unavailable')
                    <p class="red">{{$product->status}}</p>
                    @else
                    <p class="green">{{$product->status}}</p>
                    @endif
                </section>   
            </section>
        </article>
    </a>
</li>