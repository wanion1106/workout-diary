<div class="border border-primary p-2 mb-4">
    <form method="POST" action="{{ route('posts.store') }}" enctype="multipart/form-data">
        @csrf
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
                </ul>
            </div>
        @endif

        <textarea name="body" class="form-control"></textarea>

        <hr class="mt-0">

        <div class="d-flex">
            <div class="mr-auto">
                @if(Auth::user()->avatar_img == null)
                    <img src="/images/no_image.png" width="40" class="rounded-circle">
                @else
                    <img src="/storage/avatars/{{ Auth::user()->avatar_img }}" width="40" class="rounded-circle">
                @endif
            </div>

            <div class="mr-2">
                <label for="photo_img" class="btn btn-secondary">
                    +写真を追加
                    <input type="file" name="photo_img" id="photo_img" class="d-none">
                </label>
            </div>

            

        </div>
    </form>

    <div>
        <button type="submit" class="btn btn-primary shadow">投稿する</button>
    </div>
</div>