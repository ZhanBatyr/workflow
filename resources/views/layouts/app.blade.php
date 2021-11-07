<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">

    <title>{{ config('app.name', 'Laravel') }}</title>


    <script src="{{ mix('js/app.js') }}" defer></script>

    @stack('styles')

</head>

<body class="font-sans antialiased" x-data="{ cart : false }" x-on:keydown.escape="cart = false">
    <div class="min-h-screen bg-white flex flex-col justify-between">

        @php
            if (auth()->check()) {
                $cart = \App\Models\Cart::query()->firstOrCreate([
                    'user_id' => auth()->user()->id,
                    'session_id' => request()->session()->getId()
                ]);
            } else {
                $cart = \App\Models\Cart::query()->firstOrCreate([
                    'session_id' => request()->session()->getId()
                ]);
            }
        @endphp
        
        @include('layouts.header')

        <main>

            @include('layouts.cart')


            {{ $slot }}
        </main>

        @include('layouts.footer')


    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        function removeFromCart(product_id) {
            $.ajax({
                url: '{{ route('cart.remove') }}',
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

    @stack('scripts')

</body>

</html>
