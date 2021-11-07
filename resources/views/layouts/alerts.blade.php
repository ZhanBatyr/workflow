@if(session('success'))

<p class="bg-green-600 h-10 flex items-center justify-center text-sm font-medium text-white px-4 sm:px-6 lg:px-8">
    {{ session('success') }}
</p>

@endif
