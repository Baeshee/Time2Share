<li>
    <a href="/products/{{$lend_product->id}}">
        <article class="lendCard">
            <figure class="lendCard__image">
                <img src="{{$lend_product->image}}" alt="Photo of {{$lend_product->name}}">
            </figure>
            <section class="lendCard__body">
                <section class="lendCard__body__text">
                    <h2 class="js--lendCard__body__title">{{$lend_product->name}}</h2>
                    <p>Category: {{$lend_product->category}}</p>
                    <p>{{$lend_product->description}}</p>
                    <p>Return date: {{$lend_product->return_date}}</p>
                </section>  
                <section class="lendCard__body__buttons">
                    @if($lend_product->status == 'Returning')
                        <form>
                            @csrf
                            <input class="button disabled" type="submit" value="Lend">
                        </form>
                    @else
                    <form method="post" action="/return">
                        @csrf
                        <input class="button active" type="submit" value="Return">
                        <input class="hidden" type='number' name='id' value='{{$lend_product->id}}'/>
                    </form>
                    @endif
                </section> 
            </section>
        </article>
    </a>
</li>