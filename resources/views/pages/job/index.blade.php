<x-layout>
    @section('content')
        <div class="max-w-md mx-auto">
            <h1 style="color:#fa5661; font-size: 2em; font-weight: 500">{{ $header }}</h1>

            <div class="flex gap-4">
                <div class="py-4">
                    <a href="{{route('jobs.create')}}" class="pb-4">Create Post</a>
                </div>

                @auth()
                    <div class="py-4">
                        <a href="{{route('auth.register')}}" class="pb-4">Welcome</a>
                    </div>
                    <div class="py-5">
                        <form method="POST" action="{{route('auth.logout')}}">
                            @csrf
                            <button type="submit">
                                logout
                            </button>
                        </form>
                    </div>
                @else
                    <div class="py-4">
                        <a href="{{route('auth.register')}}" class="pb-4">Register</a>
                    </div>

                    <div class="py-4">
                        <a href="{{route('auth.login')}}" class="pb-4">Login</a>
                    </div>
                @endauth

            </div>

            {{--@include('components._searchbar')--}}
            <div class="mb-4">
                <x-searchbar/>
            </div>

            <div>
                @foreach($jobs as $job)
                    <x-job-card :job="$job"/>
                @endforeach
            </div>
        </div>
    @endsection

    @section('footer')
        <div class="mt-4">
            {{ $jobs->links() }}
        </div>
    @endsection
</x-layout>
