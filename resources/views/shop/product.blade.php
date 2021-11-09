<x-app-layout>

    <div class="overview">
        <div class="bg-white">
            <div class="pt-6">
                <nav aria-label="Breadcrumb">
                    <ol role="list"
                        class="max-w-2xl mx-auto px-4 flex items-center space-x-2 sm:px-6 lg:max-w-7xl lg:px-8">

                        @if ($product->category->category_id)
                        <li>
                            <div class="flex items-center">
                                <a href="{{ route('category', $product->category->category) }}" class="mr-2 text-sm font-medium text-gray-900">
                                    {{ $product->category->category->name }}
                                </a>
                                <svg width="16" height="20" viewBox="0 0 16 20" fill="currentColor"
                                    xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="w-4 h-5 text-gray-300">
                                    <path d="M5.697 4.34L8.98 16.532h1.327L7.025 4.341H5.697z" />
                                </svg>
                            </div>
                        </li>
                        @endif

                        <li>
                            <div class="flex items-center">
                                <a href="{{ route('category', $product->category) }}" class="mr-2 text-sm font-medium text-gray-900">
                                    {{ $product->category->name }}
                                </a>
                                <svg width="16" height="20" viewBox="0 0 16 20" fill="currentColor"
                                    xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="w-4 h-5 text-gray-300">
                                    <path d="M5.697 4.34L8.98 16.532h1.327L7.025 4.341H5.697z" />
                                </svg>
                            </div>
                        </li>

                        <li class="text-sm">
                            <a href="#" aria-current="page" class="font-medium text-gray-500 hover:text-gray-600">
                                {{ $product->name }}
                            </a>
                        </li>
                    </ol>
                </nav>

                <!-- Image gallery -->
                <div class="mt-6 max-w-2xl mx-auto sm:px-6">
                    <div class="aspect-w-3 aspect-h-4 sm:rounded-lg sm:overflow-hidden lg:aspect-w-3 lg:aspect-h-4">
                        <img src="{{ $product->image }}"
                            alt="{{ $product->name }}" class="object-center object-cover">
                    </div>
                </div>

                <!-- Product info -->
                <div
                    class="max-w-2xl mx-auto pt-10 pb-16 px-4 sm:px-6 lg:max-w-7xl lg:pt-16 lg:pb-24 lg:px-8 lg:grid lg:grid-cols-3 lg:grid-rows-[auto,auto,1fr] lg:gap-x-8">
                    <div class="lg:col-span-2 lg:border-r lg:border-gray-200 lg:pr-8">
                        <h1 class="text-2xl font-extrabold tracking-tight text-gray-900 sm:text-3xl">
                            {{ $product->name }}
                        </h1>
                    </div>

                    <!-- Options -->
                    <div class="mt-4 lg:mt-0 lg:row-span-3">
                        <h2 class="sr-only">Product information</h2>
                        <p class="text-3xl text-gray-900">{{ $product->price_format }}</p>

                        <form class="mt-10">
                            <a id="add" x-on:click="addToCart()" href="javascript:void(0)"
                                class="mt-10 w-full bg-indigo-600 border border-transparent rounded-md py-3 px-8 flex items-center justify-center text-base font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                Add to bag
                            </a>
                        </form>
                    </div>

                    <div class="py-10 lg:pt-6 lg:pb-16 lg:col-start-1 lg:col-span-2 lg:border-r lg:border-gray-200 lg:pr-8">
                        {!! $product->description !!}
                    </div>
                </div>
            </div>
        </div>

    </div>


    @push('scripts')
        <script>
            function addToCart() {
                let product_id = '{{ $product->id }}'
                $.ajax({
                    url: '{{ route('cart.add') }}',
                    type: 'POST',
                    data: {
                        product_id: product_id,
                        _token: '{{ csrf_token() }}'
                    },
                    success: function (response) {
                        $('#cart-qty').text(response.qty)
                        $('#cart-total').text(response.total)
                        $('#cart-items').html(response.items)
                    }
                })
            }
        </script>
    @endpush

</x-app-layout>
