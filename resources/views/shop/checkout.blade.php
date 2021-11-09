<x-app-layout>
    <div class="max-w-2xl mx-auto py-8 px-4 sm:py-18 sm:px-6 lg:max-w-7xl lg:px-8 grid grid-cols-9 lg:grid-cols-12">
        <form method="post" action="{{ route('buy', $cart) }}" autocomplete="off" class="col-span-9 lg:col-span-8 xl:col-span-9 bg-white dark:bg-gray-900 h-auto lg:h-screen relatives lg:py-6 p-4">
            @csrf

            <h2 class="text-3xl font-extrabold tracking-tight text-gray-900">Checkout</h2>

            <div class="mt-7 lg:mt-20">
                <p class="mt-1 text-sm text-gray-500">Your details</p>
                <h3 class="text-xl mt-1 text-gray-800 font-medium">Enter your details</h3>

                <div class="mt-8">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-x-8 gap-y-6">
                        <input aria-label="emailAddress" class="border-transparent rounded-md items-center p-4 border-gray-300 pb-3 text-base text-gray-600 font-normal placeholder-gray-600 focus:border-indigo-600" type="email" value="{{ auth()->check() ? auth()->user()->email : '' }}" name="email" id="email" placeholder="Email address" />
                        <input aria-label="yourName" class="border-transparent rounded-md  items-center p-4 border-gray-300 pb-3 text-base text-gray-600 font-normal placeholder-gray-600 focus:border-indigo-600" type="text" value="{{ auth()->check() ? auth()->user()->name : '' }}" name="name" id="YourName" placeholder="Your name" />
                        <input aria-label="phoneNumber" class="border-transparent rounded-md items-center p-4 border-gray-300 pb-3 text-base text-gray-600 font-normal placeholder-gray-600 focus:border-indigo-600" type="text" name="phone" id="phoneNumber" placeholder="Phone Number" />
                        <input type="text" name="total" hidden value="{{ $cart->products()->sum('price') }}">
                    </div>
                </div>
            </div>

            <button class="bg-indigo-600 border border-transparent rounded-md text-white p-3 mt-10 w-full md:w-auto text-base font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Checkout</button>
        </form>
        <div class="relative col-span-9 lg:col-span-4 xl:col-span-3 bg-gray-100 px-8 py-10 h-1/2">
            <div class="flex flex-1">
                <h3 class="text-gray-800 font-extrabold text-xl">Items</h3>
                <div class="flex-auto"></div>
            </div>

            @foreach($cart->products->unique() as $item)
                <div class="mt-5 flex flex-1 text-gray-800 dark:text-gray-50 text-base font-normal">
                    <h3>{{ $item->name }}</h3>
                    <h3 class="flex-auto text-right pr-4 md:pr-5 lg:pr-4">{{ $cart->products()->where('product_id', $item->id)->count() }}x</h3>
                    <h3>${{ $cart->products()->where('product_id', $item->id)->sum('price') }}</h3>
                </div>
            @endforeach

            <div class="px-8 xl:px-12 pb-5 bg-gray-100 md:pb-10 lg:pb-10 lg:pt-0 lg:mt-0 lg:bottom-0 absolute left-0 w-full text-lg font-medium text-gray-800">
                <span aria-label="Total" class="float-left text-2xl text-gray-800 dark:text-gray-50 font-normal">Total</span>
                <span aria-label="Total Price" class="float-right font-semibold text-gray-800 dark:text-gray-50 text-2xl">{{ $cart->subtotal }}</span>
                <div class="clear-both"></div>
            </div>
        </div>
    </div>
</x-app-layout>
