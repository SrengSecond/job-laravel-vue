<x-layout>
    @section('content')
        <h1 class="text-[#fa5661] text-4xl font-semibold mb-4">{{ $header }}</h1>

        <h2 class="font-semibold text-2xl mb-4">
            {{ $job->title }}
        </h2>

        <hr>

        <div class="py-2">
            <span><strong>Post:</strong> {{ $job->created_at }}</span>
            <br>
            <span><strong>Update</strong> {{ $job->updated_at }}</span>
        </div>

        <hr>

        <div class="mt-4">
            <p>{{ $job->description }}</p>
        </div>

        <div>
            <span>{{ $job->company }}</span>
            <span>{{ $job->location }}</span>
        </div>

        <div style="margin-bottom: 1em">
            <a style="color: var(--primary-color)" href="{{ $job->email }}">{{ $job->email }}</a>
        </div>

        <button type="btn btn-primary button"
                style="cursor: pointer;background: var(--primary-color);padding: 0.5em 1em;color: white">
            Apply
        </button>

    @endsection
</x-layout>
