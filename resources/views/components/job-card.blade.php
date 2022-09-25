@props([
    /** @var \Illuminate\Database\Eloquent\Model */
    'job'
])

@php
    use App\Models\Job
@endphp

<div {{ $attributes->class(['card']) }} style="border: 1px solid #9bacc0; border-radius: 2px; padding: 1em; margin-bottom: 1.5em">
    <div class="flex gap-8">
        <div class="card-body grow">
            <a href="/jobs/{{ $job->id }}" class="card-title" style="margin: 0; font-size: 1.25em; font-weight: bold">
                {{ $job->title }}
            </a>
            <h4 class="card-text text-gray-300">
                <p>Salary: {{ $job->salary }} $</p>
            </h4>

            @foreach( explode(' ', $job->tags) as $tag)
                <span style="background: white; color: black; padding: 0 0.5em; border-radius: 15px">{{ $tag }}</span>
            @endforeach

            <p class="card-text text-gray-500">{{ $job->description }}</p>

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
        </div>
        <img class="grow-0 max-w-xs w-full aspect-square object-cover" src="{{$job->img ? asset('storage/' . $job->img): asset('images/no-image.jpeg')}}" alt="">
    </div>
</div>
