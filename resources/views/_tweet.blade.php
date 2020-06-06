<div class="border-bottom p-3">
    <div class="d-flex flex-row p-2">
        <div class="mr-1">
            @if($post->user->avatar_img == null)
                <img src="/images/no_image.png" width="50" class="rounded-circle">
            @else
                <img src="/storage/avatars/{{ $post->user->avatar_img }}" width="50" class="rounded-circle">
            @endif

        </div>

        <div>
            <h5>{{ $post->user->name }}</h5>    

            <p>{{ $post->body }}</p>

            @if($post->photo_img)
                <img src="/storage/posts/{{ $post->photo_img }}">
            @endif
        </div>

    </div>

    @if(Auth::id() === $post->user_id)
        <div class="d-flex justify-content-end">
            <form method="POST" action="{{ route('posts.delete', $post->id) }}">
                @csrf
                <button type="submit" class="btn btn-danger">削除</button>
            </form>
        </div>
    @endif

</div>
