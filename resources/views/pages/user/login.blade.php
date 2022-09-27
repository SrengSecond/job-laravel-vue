<x-layout>
    @section('content')
        <form method="POST" action="{{route('auth.authenticate')}}">
            @csrf
            <div>
                <label for="email">email</label>
                <input class="text-black" id="email" type="email" name="email" value="{{old('email')}}">
            </div>
            @error('email')
            <div class="text-red-500 text-sm mt-2">
                {{$message}}
            @enderror
            </div>

            <div>
                <label for="password">password</label>
                <input class="text-black" id="password" type="password" name="password">
            </div>
                @error('password')
                <div class="text-red-500 text-sm mt-2">
                    {{$message}}
                    @enderror
                </div>
            <button type="submit">Register</button>
        </form>
    @endsection
</x-layout>
