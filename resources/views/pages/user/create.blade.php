<x-layout>
    @section('content')
        <h1>Register</h1>
        <form method="POST" action="{{route('auth.user')}}">
            @csrf

            <div>
                <label for="username">username</label>
                <input class="text-black" id="username" type="text" name="name" value="{{old('name')}}">
            </div>
            @error('username')
            <div class="text-red-500 text-sm mt-2">
                {{$message}}
            </div>
            @enderror

            <div>
                <label for="email">email</label>
                <input class="text-black" id="email" type="email" name="email" value="{{old('email')}}">
            </div>

            @error('email')
            <div class="text-red-500 text-sm mt-2">
                {{$message}}
            </div>
            @enderror

            <div>
                <label for="password">password</label>
                <input class="text-black" id="password" type="password" name="password">
            </div>

            @error('password')
                <div class="text-red-500 text-sm mt-2">
                    {{$message}}
                </div>
            @enderror
            <div>
                <label for="confirm-password">confirm password</label>
                <input class="text-black" id="confirm-password" type="password" name="password_confirmation">
            </div>

            <button class="bg-red-500" type="submit">
                Register
            </button>
        </form>
    @endsection
</x-layout>
