<x-layout>
    @section('content')
        <div>
            <h1>{{ $header }}</h1>

            <form method="POST" action="{{route('jobs.store')}}" enctype="multipart/form-data">
                @csrf
                <div class="mb-6">
                    <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Title</label>
                    <input value="{{ old('title') }}" type="text" name="title" id="title" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="name@flowbite.com">
                </div>

                @error('title')
                    <p class="text-red-500 mt-2 text-sm">
                        {{ $message }}
                    </p>
                @enderror

                <div class="mb-6">
                    <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Description</label>
                    <textarea type="text" name="description" id="description" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="name@flowbite.com"></textarea>
                </div>

                @error('description')
                <p class="text-red-500 mt-2 text-sm">
                    {{ $message }}
                </p>
                @enderror


                <div class="mb-6">
                    <label for="location" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Location</label>
                    <input value="{{ old('location') }}" type="text" name="location" id="location" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>

                @error('location')
                <p class="text-red-500 mt-2 text-sm">
                    {{ $message }}
                </p>
                @enderror

                <div class="mb-6">
                    <label for="salary" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Salary</label>
                    <input type="number" name="salary" id="salary" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>

                @error('salary')
                <p class="text-red-500 mt-2 text-sm">
                    {{ $message }}
                </p>
                @enderror

                <div class="mb-6">
                    <label for="company" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Company</label>
                    <input type="text" name="company" id="company" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>

                @error('company')
                <p class="text-red-500 mt-2 text-sm">
                    {{ $message }}
                </p>
                @enderror

                <div class="mb-6">
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">email</label>
                    <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>

                @error('email')
                <p class="text-red-500 mt-2 text-sm">
                    {{ $message }}
                </p>
                @enderror

                <div class="mb-6">
                    <label for="tags" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">tags</label>
                    <input type="text" name="tags" id="tags" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>

                @error('tag')
                <p class="text-red-500 mt-2 text-sm">
                    {{ $message }}
                </p>
                @enderror

                <div class="mb-6">
                    <label for="img">Select image:</label>
                    <input type="file" id="img" name="img" accept="image/*">
                </div>

                <div class="grid">
                    <button type="submit" class="text-white bg-red-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-red-700 dark:focus:ring-blue-800">Submit</button>
                </div>
            </form>
        </div>
    @endsection
</x-layout>
