<li class="manage-list__item">
    <article>
        <section class="manage-list__item__container">
            <p class="manage-list__item__value">{{$review->id}}</p>
            <p class="manage-list__item__value">{{$review->product_name}}</p>
            <p class="manage-list__item__value">{{$review->lender_email}}</p>
            <form class="manage-list__item__action" method="post" action="/manage/review/delete">
                @method('DELETE')
                @csrf
                <input class="remove-button" type="submit" value="Remove">
                <input class="hidden" type='number' name='id' value='{{$review->id}}'/>
            </form>
        </section>
    </article>
</li>