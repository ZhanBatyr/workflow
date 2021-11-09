<div x-data="{
    open : false
}"
    >
    <div class="fixed inset-0 flex z-40 lg:hidden" role="dialog" aria-modal="true" x-show="open">

        <div class="fixed inset-0 bg-black bg-opacity-25" aria-hidden="true"  x-show="open"
            x-transition:enter="transition-opacity ease-linear duration-300"
            x-transition:enter-start="opacity-0"
            x-transition:enter-end="opacity-100"
            x-transition:leave="transition ease-in duration-150"
            x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0"
        ></div>

        <div class="relative max-w-xs w-full bg-white shadow-xl pb-12 flex flex-col overflow-y-auto" x-show="open"

            x-transition:enter="transition ease-in-out duration-300 transform"
            x-transition:enter-start="-translate-x-full"
            x-transition:enter-end="translate-x-0"
            x-transition:leave="transition ease-in-out duration-300 transform"
            x-transition:leave-start="translate-x-0"
            x-transition:leave-end="-translate-x-full"
        >
            <div class="px-4 pt-5 pb-2 flex">
                <button x-on:click="open = false" type="button" class="-m-2 p-2 rounded-md inline-flex items-center justify-center text-gray-400">
                    <span class="sr-only">Close menu</span>
                    <!-- Heroicon name: outline/x -->
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

            <div>
                <div id="tabs-1-panel-1" class="pt-10 pb-8 px-4 space-y-10" aria-labelledby="tabs-1-tab-1"
                    role="tabpanel" tabindex="0">
                    <div class="grid grid-cols-2 gap-x-4">
                        <div class="group relative text-sm">
                            <div
                                class="aspect-w-1 aspect-h-1 rounded-lg bg-gray-100 overflow-hidden group-hover:opacity-75">
                                <img src="https://tailwindui.com/img/ecommerce-images/mega-menu-category-01.jpg"
                                    alt="Models sitting back to back, wearing Basic Tee in black and bone."
                                    class="object-center object-cover">
                            </div>
                            <a href="#" class="mt-6 block font-medium text-gray-900">
                                <span class="absolute z-10 inset-0" aria-hidden="true"></span>
                                New Arrivals
                            </a>
                            <p aria-hidden="true" class="mt-1">Shop now</p>
                        </div>

                        <div class="group relative text-sm">
                            <div
                                class="aspect-w-1 aspect-h-1 rounded-lg bg-gray-100 overflow-hidden group-hover:opacity-75">
                                <img src="https://tailwindui.com/img/ecommerce-images/mega-menu-category-02.jpg"
                                    alt="Close up of Basic Tee fall bundle with off-white, ochre, olive, and black tees."
                                    class="object-center object-cover">
                            </div>
                            <a href="#" class="mt-6 block font-medium text-gray-900">
                                <span class="absolute z-10 inset-0" aria-hidden="true"></span>
                                Basic Tees
                            </a>
                            <p aria-hidden="true" class="mt-1">Shop now</p>
                        </div>
                    </div>

                    <div>
                        <p id="women-clothing-heading-mobile" class="font-medium text-gray-900">
                            Clothing
                        </p>
                        <ul role="list" aria-labelledby="women-clothing-heading-mobile"
                            class="mt-6 flex flex-col space-y-6">
                            <li class="flow-root">
                                <a href="#" class="-m-2 p-2 block text-gray-500">
                                    Tops
                                </a>
                            </li>

                            <li class="flow-root">
                                <a href="#" class="-m-2 p-2 block text-gray-500">
                                    Dresses
                                </a>
                            </li>

                            <li class="flow-root">
                                <a href="#" class="-m-2 p-2 block text-gray-500">
                                    Pants
                                </a>
                            </li>

                            <li class="flow-root">
                                <a href="#" class="-m-2 p-2 block text-gray-500">
                                    Denim
                                </a>
                            </li>

                            <li class="flow-root">
                                <a href="#" class="-m-2 p-2 block text-gray-500">
                                    Sweaters
                                </a>
                            </li>

                            <li class="flow-root">
                                <a href="#" class="-m-2 p-2 block text-gray-500">
                                    T-Shirts
                                </a>
                            </li>

                            <li class="flow-root">
                                <a href="#" class="-m-2 p-2 block text-gray-500">
                                    Jackets
                                </a>
                            </li>

                            <li class="flow-root">
                                <a href="#" class="-m-2 p-2 block text-gray-500">
                                    Activewear
                                </a>
                            </li>

                            <li class="flow-root">
                                <a href="#" class="-m-2 p-2 block text-gray-500">
                                    Browse All
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div>
                        <p id="women-accessories-heading-mobile" class="font-medium text-gray-900">
                            Accessories
                        </p>
                        <ul role="list" aria-labelledby="women-accessories-heading-mobile"
                            class="mt-6 flex flex-col space-y-6">
                            <li class="flow-root">
                                <a href="#" class="-m-2 p-2 block text-gray-500">
                                    Watches
                                </a>
                            </li>

                            <li class="flow-root">
                                <a href="#" class="-m-2 p-2 block text-gray-500">
                                    Wallets
                                </a>
                            </li>

                            <li class="flow-root">
                                <a href="#" class="-m-2 p-2 block text-gray-500">
                                    Bags
                                </a>
                            </li>

                            <li class="flow-root">
                                <a href="#" class="-m-2 p-2 block text-gray-500">
                                    Sunglasses
                                </a>
                            </li>

                            <li class="flow-root">
                                <a href="#" class="-m-2 p-2 block text-gray-500">
                                    Hats
                                </a>
                            </li>

                            <li class="flow-root">
                                <a href="#" class="-m-2 p-2 block text-gray-500">
                                    Belts
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div>
                        <p id="women-brands-heading-mobile" class="font-medium text-gray-900">
                            Brands
                        </p>
                        <ul role="list" aria-labelledby="women-brands-heading-mobile"
                            class="mt-6 flex flex-col space-y-6">
                            <li class="flow-root">
                                <a href="#" class="-m-2 p-2 block text-gray-500">
                                    Full Nelson
                                </a>
                            </li>

                            <li class="flow-root">
                                <a href="#" class="-m-2 p-2 block text-gray-500">
                                    My Way
                                </a>
                            </li>

                            <li class="flow-root">
                                <a href="#" class="-m-2 p-2 block text-gray-500">
                                    Re-Arranged
                                </a>
                            </li>

                            <li class="flow-root">
                                <a href="#" class="-m-2 p-2 block text-gray-500">
                                    Counterfeit
                                </a>
                            </li>

                            <li class="flow-root">
                                <a href="#" class="-m-2 p-2 block text-gray-500">
                                    Significant Other
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- 'Men' tab panel, show/hide based on tab state. -->
                <div id="tabs-1-panel-2" class="pt-10 pb-8 px-4 space-y-10" aria-labelledby="tabs-1-tab-2"
                    role="tabpanel" tabindex="0">
                    <div class="grid grid-cols-2 gap-x-4">
                        <div class="group relative text-sm">
                            <div
                                class="aspect-w-1 aspect-h-1 rounded-lg bg-gray-100 overflow-hidden group-hover:opacity-75">
                                <img src="https://tailwindui.com/img/ecommerce-images/product-page-04-detail-product-shot-01.jpg"
                                    alt="Drawstring top with elastic loop closure and textured interior padding."
                                    class="object-center object-cover">
                            </div>
                            <a href="#" class="mt-6 block font-medium text-gray-900">
                                <span class="absolute z-10 inset-0" aria-hidden="true"></span>
                                New Arrivals
                            </a>
                            <p aria-hidden="true" class="mt-1">Shop now</p>
                        </div>

                        <div class="group relative text-sm">
                            <div
                                class="aspect-w-1 aspect-h-1 rounded-lg bg-gray-100 overflow-hidden group-hover:opacity-75">
                                <img src="https://tailwindui.com/img/ecommerce-images/category-page-02-image-card-06.jpg"
                                    alt="Three shirts in gray, white, and blue arranged on table with same line drawing of hands and shapes overlapping on front of shirt."
                                    class="object-center object-cover">
                            </div>
                            <a href="#" class="mt-6 block font-medium text-gray-900">
                                <span class="absolute z-10 inset-0" aria-hidden="true"></span>
                                Artwork Tees
                            </a>
                            <p aria-hidden="true" class="mt-1">Shop now</p>
                        </div>
                    </div>

                    <div>
                        <p id="men-clothing-heading-mobile" class="font-medium text-gray-900">
                            Clothing
                        </p>
                        <ul role="list" aria-labelledby="men-clothing-heading-mobile"
                            class="mt-6 flex flex-col space-y-6">
                            <li class="flow-root">
                                <a href="#" class="-m-2 p-2 block text-gray-500">
                                    Tops
                                </a>
                            </li>

                            <li class="flow-root">
                                <a href="#" class="-m-2 p-2 block text-gray-500">
                                    Pants
                                </a>
                            </li>

                            <li class="flow-root">
                                <a href="#" class="-m-2 p-2 block text-gray-500">
                                    Sweaters
                                </a>
                            </li>

                            <li class="flow-root">
                                <a href="#" class="-m-2 p-2 block text-gray-500">
                                    T-Shirts
                                </a>
                            </li>

                            <li class="flow-root">
                                <a href="#" class="-m-2 p-2 block text-gray-500">
                                    Jackets
                                </a>
                            </li>

                            <li class="flow-root">
                                <a href="#" class="-m-2 p-2 block text-gray-500">
                                    Activewear
                                </a>
                            </li>

                            <li class="flow-root">
                                <a href="#" class="-m-2 p-2 block text-gray-500">
                                    Browse All
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div>
                        <p id="men-accessories-heading-mobile" class="font-medium text-gray-900">
                            Accessories
                        </p>
                        <ul role="list" aria-labelledby="men-accessories-heading-mobile"
                            class="mt-6 flex flex-col space-y-6">
                            <li class="flow-root">
                                <a href="#" class="-m-2 p-2 block text-gray-500">
                                    Watches
                                </a>
                            </li>

                            <li class="flow-root">
                                <a href="#" class="-m-2 p-2 block text-gray-500">
                                    Wallets
                                </a>
                            </li>

                            <li class="flow-root">
                                <a href="#" class="-m-2 p-2 block text-gray-500">
                                    Bags
                                </a>
                            </li>

                            <li class="flow-root">
                                <a href="#" class="-m-2 p-2 block text-gray-500">
                                    Sunglasses
                                </a>
                            </li>

                            <li class="flow-root">
                                <a href="#" class="-m-2 p-2 block text-gray-500">
                                    Hats
                                </a>
                            </li>

                            <li class="flow-root">
                                <a href="#" class="-m-2 p-2 block text-gray-500">
                                    Belts
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div>
                        <p id="men-brands-heading-mobile" class="font-medium text-gray-900">
                            Brands
                        </p>
                        <ul role="list" aria-labelledby="men-brands-heading-mobile"
                            class="mt-6 flex flex-col space-y-6">
                            <li class="flow-root">
                                <a href="#" class="-m-2 p-2 block text-gray-500">
                                    Re-Arranged
                                </a>
                            </li>

                            <li class="flow-root">
                                <a href="#" class="-m-2 p-2 block text-gray-500">
                                    Counterfeit
                                </a>
                            </li>

                            <li class="flow-root">
                                <a href="#" class="-m-2 p-2 block text-gray-500">
                                    Full Nelson
                                </a>
                            </li>

                            <li class="flow-root">
                                <a href="#" class="-m-2 p-2 block text-gray-500">
                                    My Way
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="border-t border-gray-200 py-6 px-4 space-y-6">
                @auth
                <div class="flow-root">
                    <a href="#" class="-m-2 p-2 block font-medium text-gray-900">{{ Auth::user()->name }}</a>
                </div>
                @else
                <div class="flow-root">
                    <a href="{{ route('login') }}" class="-m-2 p-2 block font-medium text-gray-900">Sign in</a>
                </div>
                <div class="flow-root">
                    <a href="{{ route('register') }}" class="-m-2 p-2 block font-medium text-gray-900">Create account</a>
                </div>
                @endauth
            </div>

        </div>
    </div>

    <header class="relative bg-white">

        @include('layouts.alerts')

        <nav aria-label="Top" class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="border-b border-gray-200">
                <div class="h-16 flex items-center">
                    <!-- Mobile menu toggle, controls the 'mobileMenuOpen' state. -->
                    <button type="button" class="bg-white p-2 rounded-md text-gray-400 lg:hidden"
                        x-on:click="open = true"
                    >
                        <span class="sr-only">Open menu</span>
                        <!-- Heroicon name: outline/menu -->
                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>

                    <!-- Logo -->
                    <div class="ml-4 flex lg:ml-0">
                        <a href="/">
                            <span class="sr-only">Workflow</span>
                            <img class="h-8 w-auto"
                                src="https://tailwindui.com/img/logos/workflow-mark.svg?color=indigo&shade=600" alt="">
                        </a>
                    </div>

                    <!-- Flyout menus -->
                    <div class="hidden lg:ml-8 lg:block lg:self-stretch z-50">
                        <div class="h-full flex space-x-8">

                            @foreach ($categories as $category)
                            <div class="flex" x-data="{ open: false }">
                                <div class="relative flex">
                                    <!-- Item active: "border-indigo-600 text-indigo-600", Item inactive: "border-transparent text-gray-700 hover:text-gray-800" -->
                                    <button type="button"
                                        class="border-transparent text-gray-700 hover:text-gray-800 relative z-10 flex items-center transition-colors ease-out duration-200 text-sm font-medium border-b-2 -mb-px pt-px"
                                        aria-expanded="false"
                                        x-bind:class="{ 'border-indigo-600 text-indigo-600' : (open), 'border-transparent text-gray-700 hover:text-gray-800' : (!(open)) }"
                                        x-on:click="open = true"
                                        x-on:mousedown="if (open) $event.preventDefault()"
                                    >
                                        {{ $category->name }}
                                    </button>
                                </div>
                                <div class="absolute top-full inset-x-0 text-sm text-gray-500"
                                    x-transition:enter="transition ease-out duration-200"
                                    x-transition:enter-start="opacity-0"
                                    x-transition:enter-end="opacity-100"
                                    x-transition:leave="transition ease-in duration-150"
                                    x-transition:leave-start="opacity-100"
                                    x-transition:leave-end="opacity-0"
                                    x-show="open"
                                    x-on:click.away="open = false"
                                >
                                    <!-- Presentational element used to render the bottom shadow, if we put the shadow on the actual panel it pokes out the top, so we use this shorter element to hide the top of the shadow -->
                                    <div class="absolute inset-0 top-1/2 bg-white shadow" aria-hidden="true"></div>

                                    <div class="relative bg-white">
                                        <div class="max-w-7xl mx-auto px-8">
                                            <div class="grid grid-cols-2 gap-y-10 gap-x-8 py-16">
                                                <div class="col-start-2 grid grid-cols-2 gap-x-8">

                                                    @foreach ($category->all_products->sortByDesc('created_at')->take(2) as $latest)
                                                    <div class="group relative text-base sm:text-sm">
                                                        <div
                                                            class="aspect-w-1 aspect-h-1 rounded-lg bg-gray-100 overflow-hidden group-hover:opacity-75">
                                                            <img src="{{ $latest->image }}"
                                                                alt="Models sitting back to back, wearing Basic Tee in black and bone."
                                                                class="object-center object-cover">
                                                        </div>
                                                        <a href="{{ route('overview', $latest) }}" class="mt-6 block font-medium text-gray-900">
                                                            <span class="absolute z-10 inset-0"
                                                                aria-hidden="true"></span>
                                                                {{ $latest->name }}
                                                        </a>
                                                        <p aria-hidden="true" class="mt-1">{{ $latest->price_format }}</p>
                                                    </div>
                                                    @endforeach

                                                </div>
                                                <div class="row-start-1 grid grid-cols-3 gap-y-10 gap-x-8 text-sm">
                                                    <div>
                                                        <p id="Clothing-heading" class="font-medium text-gray-900">
                                                            Products
                                                        </p>
                                                        <ul role="list" aria-labelledby="Clothing-heading"
                                                            class="mt-6 space-y-6 sm:mt-4 sm:space-y-4">

                                                            @foreach ($category->categories as $_category)
                                                            <li class="flex">
                                                                <a href="{{ route('category', $_category) }}" class="hover:text-gray-800">
                                                                    {{ $_category->name }}
                                                                </a>
                                                            </li>
                                                            @endforeach

                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                        </div>
                    </div>

                    <div class="ml-auto flex items-center">

                        @auth
                        <div class="hidden lg:flex lg:flex-1 lg:items-center lg:justify-end lg:space-x-6">
                            <a href="/admin" class="text-sm font-medium text-gray-700 hover:text-gray-800">{{ Auth::user()->name }}</a>
                        </div>
                        @else
                        <div class="hidden lg:flex lg:flex-1 lg:items-center lg:justify-end lg:space-x-6">
                            <a href="{{ route('login') }}" class="text-sm font-medium text-gray-700 hover:text-gray-800">Sign in</a>
                            <span class="h-6 w-px bg-gray-200" aria-hidden="true"></span>
                            <a href="{{ route('register') }}" class="text-sm font-medium text-gray-700 hover:text-gray-800">Create account</a>
                        </div>
                        @endauth

                        <div class="ml-4 flow-root lg:ml-6">
                            <a href="#" x-on:click="cart = true" class="group -m-2 p-2 flex items-center">
                                <svg class="flex-shrink-0 h-6 w-6 text-gray-400 group-hover:text-gray-500"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                                </svg>
                                <span class="ml-2 text-sm font-medium text-gray-700 group-hover:text-gray-800" id="cart-qty">{{ $cart->products()->count() }}</span>
                                <span class="sr-only">items in cart, view bag</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>
</div>
