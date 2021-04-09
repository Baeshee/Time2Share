<li class="manage-list__item">
    <article>
        <section class="manage-list__item__container">
            <p class="manage-list__item__value">{{$product->id}}</p>
            <p class="manage-list__item__value">{{$product->name}}</p>
            <p class="manage-list__item__value"></p>
            <form class="manage-list__item__action" method="post" action="/manage/product/delete">
                @method('DELETE')
                @csrf
                <input class="remove-button" type="submit" value="Remove">
                <input class="hidden" type='number' name='id' value='{{$product->id}}'/>
            </form>
        </section>
    </article>
</li>