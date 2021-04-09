<li class="manage-list__item">
    <article>
        <section class="manage-list__item__container">
            <p class="manage-list__item__value">{{$product->id}}</p>
            <p class="manage-list__item__value">{{$product->name}}</p>
            <p class="manage-list__item__value"></p>
            <form class="manage-list__item__action" method="post" action="/manage/product/{{$product->id}}">
                @method('DELETE')
                @csrf
                <input class="remove-button" type="submit" value="Remove">
            </form>
        </section>
    </article>
</li>