<li>
    <a href="/products/{{$product->id}}">
        <article class="ownedCard">
            <figure class="ownedCard__image">
                <img src="{{asset(str_replace('public', 'storage', $product->image))}}" alt="Photo of {{$product->name}}">
            </figure>
            <section class="ownedCard__body">
                <section class="ownedCard__body__text">
                    <h2 class="js--ownedCard__body__title">{{$product->name}}</h2>
                    <p>Category: {{$product->category}}</p>
                    <p>{{$product->description}}</p>
                    @if($product->status == 'Lend Out')
                        <p class="red">{{$product->status}}</p>
                    @elseif($product->status == 'Returning')
                        <p class="orange">{{$product->status}}</p>
                    @else
                        <p class="green">{{$product->status}}</p>
                    @endif
                </section>  
                @if ($product->status == 'Returning')
                    <section class="ownedCard__body__buttons">
                        <form method="post" action="/return/accept">
                            @csrf
                            <input class="button active" type="submit" value="Accept Return">
                            <input class="hidden" type='number' name='id' value='{{$product->id}}'/>
                        </form>
                    </section> 
                @endif 
            </section>
        </article>
    </a>
</li>