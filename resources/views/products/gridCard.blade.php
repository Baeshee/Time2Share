<li data-product-category="{{$product->category}}">
    <a href="/products/{{$product->id}}">
        <article class="gridCard">
            <figure class="gridCard__image">
                <img src="{{asset(str_replace('public', 'storage', $product->image))}}" alt="Photo of {{$product->name}}">
            </figure>
            <section class="gridCard__body">
                <section class="gridCard__body__text">
                    <h2 class="js--gridCard__body__title">{{$product->name}}</h2>
                    <p>Category: {{$product->category}}</p>
                    <p>{{$product->description}}</p>
                    @if($product->status == 'Lend Out')
                        <p class="red">{{$product->status}}</p>
                    @elseif($product->status == 'Returning')
                        <p class="orange">Soon Available</p>
                    @else
                        <p class="green">{{$product->status}}</p>
                    @endif
                </section>   
            </section>
        </article>
    </a>
</li>