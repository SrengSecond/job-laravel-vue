@if(session()->has('message'))
    <div class="fixed w-full top-0 text bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded"
            role="alert"
            x-data="{ show: true }"
            x-init="setTimeout(() => show = false, 3000)"
            x-show="show">
        <strong class="font-bold">Success!</strong>
        <span class="block sm:inline">{{ session('message') }}</span>
    </div>
@endif

