<x-layout>
    @section('content')
        <h1 style="color:#fa5661">{{ $header }}</h1>
        @foreach($jobs as $job)
            <x-job-card :job="$job"/>
        @endforeach
    @endsection
</x-layout>
