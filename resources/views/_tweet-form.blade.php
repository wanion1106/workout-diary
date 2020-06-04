<div class="border border-primary p-2 mb-4">
    <form method="POST" action="{{ route('home.store') }}" enctype="multipart/form-data">
        @csrf
        <textarea name="body" class="form-control"></textarea>

        <hr class="mt-0">

        <div class="d-flex justify-content-between">
        
            @if(Auth::user()->avatar_img == null)
                <img src="/images/no_image.png" width="40" class="rounded-circle">
            @else
                <img src="/storage/avatars/{{ Auth::user()->avatar_img }}" width="40" class="rounded-circle">
            @endif

            <input type="file" name="photo_img">

            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
                </ul>
            </div>
            @endif


            <button type="submit" class="btn btn-primary shadow">投稿する</button>

        </div>
    </form>
</div>