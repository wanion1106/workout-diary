<div class="d-flex flex-row p-3 border-bottom">
    <div class="mr-1">
        @if(Auth::user()->avatar_img == null)
            <img src="/images/no_image.png" width="50" class="rounded-circle">
        @else
            <img src="/storage/avatars/{{ Auth::user()->avatar_img }}" width="50" class="rounded-circle">
        @endif

    </div>

    <div>
        <h5>{{ $post->user->name }}</h5>

        <p>{{ $post->body }}</p>
    </div>

</div>