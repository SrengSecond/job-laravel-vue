<x-layout>
    @section('content')
        <h1>Edit Job</h1>
        <form method="POST" action="{{ route('jobs.update',$job->id)}}" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="title" class="sr-only">Title</label>
                <input type="text" name="title" id="title" placeholder="Title" class="border-2 w-full rounded-lg text-black" value="{{ $job->title }}">
            </div>

            @error('title')
            <div class="text-red-500 mt-2 text-sm">
                <p>{{ $message }}</p>
            </div>
            @enderror

            <div>
                <label for="img">image</label>
                <input type="file" id="img" name="img" accept="image/*" value="{{ $job->img }}">
            </div>

            <button class="bg-red-500 px-4 py-2 rd">
                apply
            </button>
        </form>

    @endsection
</x-layout>
