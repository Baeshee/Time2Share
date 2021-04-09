<li class="manage-list__item">
    <article>
        <section class="manage-list__item__container">
            <p class="manage-list__item__value">{{$user->id}}</p>
            <p class="manage-list__item__value">{{$user->name}}</p>
            <p class="manage-list__item__value">{{$user->account_status}}</p>
            <form class="manage-list__item__action" method="post" action="/manage/user/{{$user->id}}">
                @csrf
                @method('put')
                
                <input class="remove-button" type="submit" value="Block/Unblock">
            </form>
        </section>
    </article>
</li>