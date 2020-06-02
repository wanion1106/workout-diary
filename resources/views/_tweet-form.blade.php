<div class="border border-primary p-2 mb-4">
    <form action="">
        @csrf
        <textarea name="body" class="form-control"></textarea>

        <hr class="mt-0">

        <div class="d-flex justify-content-between">
        
            @if(Auth::user()->avatar_img == null)
                <img src="/images/no_image.png" width="40" class="rounded-circle">
            @else
                <img src="/storage/avatars/{{ Auth::user()->avatar_img }}" width="40" class="rounded-circle">
            @endif

            <button type="submit" class="btn btn-primary shadow">投稿する</button>

        </div>
    </form>
</div>