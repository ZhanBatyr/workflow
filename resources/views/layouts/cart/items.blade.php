<div class="mt-8">
    <div class="flow-root">
        <ul role="list" class="-my-6 divide-y divide-gray-200">
            @foreach($cart->products->unique() as $product)
            <li class="py-6 flex">
                <div
                    class="flex-shrink-0 w-24 h-24 border border-gray-200 rounded-md overflow-hidden">
                    <img src="{{ $product->image }}"
                        alt="Salmon orange fabric pouch with match zipper, gray zipper pull, and adjustable hip belt."
                        class="w-full h-full object-center object-cover">
                </div>

                <div class="ml-4 flex-1 flex flex-col">
                    <div>
                        <div
                            class="flex justify-between text-base font-medium text-gray-900">
                            <h3>
                                <a href="{{ route('overview', $product) }}">
                                    {{ $product->name }}
                                </a>
                            </h3>
                            <p class="ml-4">
                                {{ $product->price_format }}
                            </p>
                        </div>
                    </div>
                    <div class="flex-1 flex items-end justify-between text-sm">
                        <p class="text-gray-500">
                            Qty {{ $cart->products()->where('product_id', $product->id)->count() }}
                        </p>

                        <div class="flex">
                            <button type="button" x-on:click="removeFromCart('{{ $product->id }}')"
                                class="font-medium text-indigo-600 hover:text-indigo-500">Remove</button>
                        </div>
                    </div>
                </div>
            </li>
            @endforeach

        </ul>
    </div>
</div>