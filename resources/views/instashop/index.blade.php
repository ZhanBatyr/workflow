@php
if (auth()->check()) {
    $cart = \App\Models\Cart::query()->firstOrCreate([
        'user_id' => auth()->user()->id,
    ]);
} else {
    $cart = \App\Models\Cart::query()->firstOrCreate([
        'session_id' => request()
            ->session()
            ->getId(),
    ]);
}
@endphp

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="keywords" content='InstaShop' />
    <meta name="description" content='InstaShop' />
    <meta name="robots" content="index,follow" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE" />
    <link rel="shortcut icon" href="https://assets3.insales.ru/assets/1/1041/1336337/v_1582725497/favicon.png">
    <meta property="og:title" content="InstaShop" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://demo-instashop.myinsales.ruhttps://demo-instashop.myinsales.ru" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/css?family=Exo+2:300,400,700" rel="stylesheet" />
    <link rel="stylesheet" type="text/css"
        href="https://assets3.insales.ru/assets/1/1041/1336337/1582725497/theme.css" />

</head>
<header class="pallette_1">
    <div class="container">
        <div class="b-bottom_opacity p-t-15 p-b-15">
            <div class="row flex-middle">
                <div class="cell-3 cell-6-m">
                    <div class="hide-m">
                        <ul class="social no-list-style p-0 m-t-0 m-b-0 in-header">
                            <li class="inline-middle m-l-10 m-r-10">
                                <a target="_blank" href="https://www.instagram.com" title="instagram" title="instagram">
                                    <div class="fab fa-instagram" aria-hidden="true"></div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="cell-6 text-center hide-m">
                    <ul class="no-list-style p-0 m-t-0 m-b-0">
                        <li class="inline-middle m-l-10 m-r-10"><a class="bttn-underline "
                                href="{{ route('instashop.index') }}">Каталог</a></li>
                        <li class="inline-middle m-l-10 m-r-10"><a class="bttn-underline "
                                href="{{ route('instashop.checkout') }}">Корзина</a>
                        </li>
                    </ul>
                </div>
                <div class="cell-3 text-right cell-6-m">
                    <div class="header-menu-right row flex-middle flex-end">
                        <div class="hide-sm m-l-20">
                            <a class="login-link" href="{{ route('login') }}">
                                <span class="inline-middle">
                                    <?xml version="1.0" encoding="iso-8859-1"?>
                                    <svg fill="currentColor"
                                        style="enable-background:new 0 0 55 55; width: 1.6em; display: block;"
                                        version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                        viewBox="0 0 472.6 472.6" style="enable-background:new 0 0 472.6 472.6;"
                                        xml:space="preserve">
                                        <g>
                                            <path d="M417.3,453.2c-22-45.7-61.6-81.6-109.6-99.7v-28.9c23.6-1.3,68.1-7.3,94.2-34c3.3-3.4,4.6-8.3,3.4-12.9s-4.8-8.2-9.4-9.5
                                c-0.4-0.1-34.8-11.9-27.9-82.3c3-30,2.5-57-1.4-80.2c-4.5-26.6-13.5-47.5-26.6-62.1c-14.2-15.7-32.7-23.7-55-23.7
                                c-0.9,0-1.8,0-2.6,0C273.9,12.5,255.3,0,226.8,0c-13.3,0-27.2,2.7-41.4,8.2l-0.6,0.2c-11.2,4.2-32,12.1-49.6,35.5
                                c-20.5,27.2-30.3,67.5-29.1,119.7c1.2,52.3-7.4,77.9-14.8,90.2c-6.1,10.1-11.9,12.1-13.4,12.5c-5.1-0.4-9.2,2.2-11.8,6.6
                                c-2.7,4.5-1.7,10.2,1.3,14.6c1.2,1.8,8.2,11.2,25.1,20.3c19.3,10.4,43.4,16.3,71.9,17.5v27.5C117,370.8,77.6,407,55.3,453.3
                                c-2,4.2-1.7,9.1,0.7,13c2.5,3.9,6.8,6.3,11.4,6.3h337.8c4.6,0,9-2.4,11.4-6.3C419,462.3,419.3,457.4,417.3,453.2z M90.4,445.5
                                c21.6-33.2,54-58.3,91.5-70.4c5.6-1.8,9.4-7,9.4-12.8V312c0-3.6-1.4-7.1-4-9.6s-6-4-9.6-3.9c-38.9,0.4-62.4-8.5-75.2-16.1
                                c0.9-0.9,1.9-1.8,2.9-2.8c19.7-20.5,29-59.7,27.7-116.6c-2.6-105.1,42.1-122.1,61.1-129.3l0.6-0.2c11.2-4.2,21.9-6.4,31.8-6.4
                                c25.8,0,39,14.2,40.1,15.5c2.8,3.5,7.1,5.2,11.6,4.8c2.2-0.2,4.4-0.3,6.5-0.3c14.5,0,26,4.8,35,14.8c19,21,26.8,65.3,21.2,121.5
                                c-5.6,56.7,12.1,85.1,27.4,98.9c-20.6,11.4-49.9,15.7-72,15.7c-1.2,0-1.9,0-2,0c-3.6-0.1-7.2,1.3-9.8,3.8c-2.6,2.5-4.1,6-4.1,9.7
                                v51.7c0,5.9,3.8,11,9.4,12.8c38,12.3,70.5,37.1,92,69.7H90.4V445.5z" />
                                        </g>
                                    </svg>
                                </span>
                            </a>
                        </div>
                        <div class="m-l-20">
                            <a class="js-basket hover-opacity" href="{{ route('instashop.checkout') }}" custom-popup-link="dynamic_basket">
                                <span class="inline-middle">
                                    <svg fill="currentColor"
                                        style="enable-background:new 0 0 60 60; width: 1.6em; display: block;"
                                        viewBox="-3 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="m494.929688 97.148438c-9.492188-10.84375-23.023438-16.816407-38.097657-16.816407h-364.429687l-3.667969-27.5c-3.953125-29.625-24.578125-52.832031-46.957031-52.832031h-26.777344c-8.285156 0-15 6.714844-15 15s6.714844 15 15 15h26.777344c4.8125 0 15.003906 10.175781 17.21875 26.796875l42.9375 322.039063c1.890625 14.195312 9.183594 27.484374 20.535156 37.421874 8.417969 7.371094 18.367188 12.273438 28.789062 14.324219-4.246093 7.808594-6.660156 16.753907-6.660156 26.25 0 30.421875 24.75 55.167969 55.167969 55.167969s55.167969-24.746094 55.167969-55.167969c0-9.0625-2.210938-17.613281-6.101563-25.164062h78.601563c-3.890625 7.550781-6.101563 16.101562-6.101563 25.164062 0 30.421875 24.75 55.167969 55.167969 55.167969s55.167969-24.746094 55.167969-55.167969c0-9.0625-2.210938-17.613281-6.101563-25.164062h39.300782c8.28125 0 15-6.71875 15-15 0-8.285157-6.71875-15-15-15h-302.589844c-14.65625 0-28.671875-12.273438-30.609375-26.800781l-3.136719-23.535157h116.746094c.003906 0 .007812.003907.011718.003907.003907 0 .007813-.003907.015626-.003907h96.367187c.003906 0 .007813.003907.015625.003907.003906 0 .003906-.003907.007812-.003907h83.003907c14.320312 0 28.457031-5.472656 39.808593-15.40625 11.351563-9.9375 18.644532-23.230469 20.535157-37.425781l21.515625-161.367188c1.992187-14.941406-2.136719-29.140624-11.628906-39.984374zm-269.996094 359.683593c0 13.878907-11.289063 25.167969-25.167969 25.167969-13.875 0-25.167969-11.289062-25.167969-25.167969 0-13.875 11.292969-25.164062 25.167969-25.164062 13.878906 0 25.167969 11.289062 25.167969 25.164062zm176.734375 0c0 13.878907-11.289063 25.167969-25.167969 25.167969s-25.167969-11.289062-25.167969-25.167969c0-13.875 11.289063-25.164062 25.167969-25.164062s25.167969 11.289062 25.167969 25.164062zm70.6875-339.921875c3.714843 4.242188 5.300781 10.011719 4.464843 16.253906l-9.019531 67.667969h-102.0625l6.03125-90.5h85.0625c6.300781 0 11.8125 2.335938 15.523438 6.578125zm-213.019531 204.421875-6.035157-90.5h80.371094l-6.035156 90.5zm-8.035157-120.5-6.03125-90.5h96.433594l-6.03125 90.5zm-36.097656-90.5 6.03125 90.5h-112.769531l-12.066406-90.5zm-102.738281 120.5h110.769531l6.035156 90.5h-104.738281zm312.234375 90.5h-66.996094l6.035156-90.5h100.0625l-8.492187 63.703125c-1.9375 14.527344-15.957032 26.796875-30.609375 26.796875zm0 0" />
                                    </svg>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="p-t-20 p-b-5">
            <div class="text-center">
                <a class="inline-middle" href="{{ route('instashop.index') }}" title="InstaShop">
                    <img class="logotype show"
                        src="https://tailwindui.com/img/logos/workflow-mark.svg?color=indigo&shade=600" alt="InstaShop"
                        title="InstaShop" />
                </a>
            </div>
        </div>
    </div>
</header>
<div class="header-menu-top">
    <div class="container">
        <div class="text-center p-t-15 p-b-15 b-bottom_opacity m-b-30 p-t-0-m">
            <div class="row flex-middle">
                <div class="cell-3 cell-6-m">
                    <div class="show-sticky hide-m">
                        <a class="show text-left" href="{{ route('instashop.index') }}">
                            <img class="logotype show"
                                src="https://tailwindui.com/img/logos/workflow-mark.svg?color=indigo&shade=600"
                                alt="InstaShop" title="InstaShop" style="max-height: 40px;" />
                        </a>
                    </div>
                    <div class="show-sticky hide show-m">
                        <a href="#" class="js-open-main-menu" custom-popup-link="mobile-menu">
                            <div class="burger">
                                <div></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="cell-6 hide-m">
                    <ul class="no-list-style p-0 m-t-0 m-b-0">
                        <li class="inline-middle m-l-10 m-r-10">
                            <a class="bttn-underline active-link" href="{{ route('instashop.index') }}">ВСЕ ТОВАРЫ</a>
                        </li>
                    </ul>
                </div>
                <div class="cell-3 cell-6-m">
                    <div class="show-sticky">
                        <div class="header-menu-right row flex-middle flex-end">
                            <div>
                                <a class="search_widget-submit hover-opacity" href="#" custom-popup-link="search-form">
                                    <span class="inline-middle">
                                        <svg fill="currentColor"
                                            style="enable-background:new 0 0 53.627 53.627; width: 1.6em; display: block;"
                                            version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                            xmlns:xlink="http://www.w3.org/1999/xlink"
                                            enable-background="new 0 0 512 512">
                                            <g>
                                                <path
                                                    d="M495,466.2L377.2,348.4c29.2-35.6,46.8-81.2,46.8-130.9C424,103.5,331.5,11,217.5,11C103.4,11,11,103.5,11,217.5   S103.4,424,217.5,424c49.7,0,95.2-17.5,130.8-46.7L466.1,495c8,8,20.9,8,28.9,0C503,487.1,503,474.1,495,466.2z M217.5,382.9   C126.2,382.9,52,308.7,52,217.5S126.2,52,217.5,52C308.7,52,383,126.3,383,217.5S308.7,382.9,217.5,382.9z" />
                                            </g>
                                        </svg>
                                    </span>
                                </a>
                            </div>
                            <div class="hide-sm m-l-20">
                                <a class="login-link" href="{{ route('login') }}">
                                    <span class="inline-middle">
                                        <svg fill="currentColor"
                                            style="enable-background:new 0 0 55 55; width: 1.6em; display: block;"
                                            version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                            viewBox="0 0 472.6 472.6" style="enable-background:new 0 0 472.6 472.6;"
                                            xml:space="preserve">
                                            <g>
                                                <path d="M417.3,453.2c-22-45.7-61.6-81.6-109.6-99.7v-28.9c23.6-1.3,68.1-7.3,94.2-34c3.3-3.4,4.6-8.3,3.4-12.9s-4.8-8.2-9.4-9.5
   c-0.4-0.1-34.8-11.9-27.9-82.3c3-30,2.5-57-1.4-80.2c-4.5-26.6-13.5-47.5-26.6-62.1c-14.2-15.7-32.7-23.7-55-23.7
   c-0.9,0-1.8,0-2.6,0C273.9,12.5,255.3,0,226.8,0c-13.3,0-27.2,2.7-41.4,8.2l-0.6,0.2c-11.2,4.2-32,12.1-49.6,35.5
   c-20.5,27.2-30.3,67.5-29.1,119.7c1.2,52.3-7.4,77.9-14.8,90.2c-6.1,10.1-11.9,12.1-13.4,12.5c-5.1-0.4-9.2,2.2-11.8,6.6
   c-2.7,4.5-1.7,10.2,1.3,14.6c1.2,1.8,8.2,11.2,25.1,20.3c19.3,10.4,43.4,16.3,71.9,17.5v27.5C117,370.8,77.6,407,55.3,453.3
   c-2,4.2-1.7,9.1,0.7,13c2.5,3.9,6.8,6.3,11.4,6.3h337.8c4.6,0,9-2.4,11.4-6.3C419,462.3,419.3,457.4,417.3,453.2z M90.4,445.5
   c21.6-33.2,54-58.3,91.5-70.4c5.6-1.8,9.4-7,9.4-12.8V312c0-3.6-1.4-7.1-4-9.6s-6-4-9.6-3.9c-38.9,0.4-62.4-8.5-75.2-16.1
   c0.9-0.9,1.9-1.8,2.9-2.8c19.7-20.5,29-59.7,27.7-116.6c-2.6-105.1,42.1-122.1,61.1-129.3l0.6-0.2c11.2-4.2,21.9-6.4,31.8-6.4
   c25.8,0,39,14.2,40.1,15.5c2.8,3.5,7.1,5.2,11.6,4.8c2.2-0.2,4.4-0.3,6.5-0.3c14.5,0,26,4.8,35,14.8c19,21,26.8,65.3,21.2,121.5
   c-5.6,56.7,12.1,85.1,27.4,98.9c-20.6,11.4-49.9,15.7-72,15.7c-1.2,0-1.9,0-2,0c-3.6-0.1-7.2,1.3-9.8,3.8c-2.6,2.5-4.1,6-4.1,9.7
   v51.7c0,5.9,3.8,11,9.4,12.8c38,12.3,70.5,37.1,92,69.7H90.4V445.5z" />
                                            </g>
                                        </svg>
                                    </span>
                                </a>
                            </div>
                            <div class="m-l-20">
                                <a class="js-basket hover-opacity" href="#" custom-popup-link="dynamic_basket">
                                    <span class="inline-middle">
                                        <svg fill="currentColor"
                                            style="enable-background:new 0 0 60 60; width: 1.6em; display: block;"
                                            viewBox="-3 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="m494.929688 97.148438c-9.492188-10.84375-23.023438-16.816407-38.097657-16.816407h-364.429687l-3.667969-27.5c-3.953125-29.625-24.578125-52.832031-46.957031-52.832031h-26.777344c-8.285156 0-15 6.714844-15 15s6.714844 15 15 15h26.777344c4.8125 0 15.003906 10.175781 17.21875 26.796875l42.9375 322.039063c1.890625 14.195312 9.183594 27.484374 20.535156 37.421874 8.417969 7.371094 18.367188 12.273438 28.789062 14.324219-4.246093 7.808594-6.660156 16.753907-6.660156 26.25 0 30.421875 24.75 55.167969 55.167969 55.167969s55.167969-24.746094 55.167969-55.167969c0-9.0625-2.210938-17.613281-6.101563-25.164062h78.601563c-3.890625 7.550781-6.101563 16.101562-6.101563 25.164062 0 30.421875 24.75 55.167969 55.167969 55.167969s55.167969-24.746094 55.167969-55.167969c0-9.0625-2.210938-17.613281-6.101563-25.164062h39.300782c8.28125 0 15-6.71875 15-15 0-8.285157-6.71875-15-15-15h-302.589844c-14.65625 0-28.671875-12.273438-30.609375-26.800781l-3.136719-23.535157h116.746094c.003906 0 .007812.003907.011718.003907.003907 0 .007813-.003907.015626-.003907h96.367187c.003906 0 .007813.003907.015625.003907.003906 0 .003906-.003907.007812-.003907h83.003907c14.320312 0 28.457031-5.472656 39.808593-15.40625 11.351563-9.9375 18.644532-23.230469 20.535157-37.425781l21.515625-161.367188c1.992187-14.941406-2.136719-29.140624-11.628906-39.984374zm-269.996094 359.683593c0 13.878907-11.289063 25.167969-25.167969 25.167969-13.875 0-25.167969-11.289062-25.167969-25.167969 0-13.875 11.292969-25.164062 25.167969-25.164062 13.878906 0 25.167969 11.289062 25.167969 25.164062zm176.734375 0c0 13.878907-11.289063 25.167969-25.167969 25.167969s-25.167969-11.289062-25.167969-25.167969c0-13.875 11.289063-25.164062 25.167969-25.164062s25.167969 11.289062 25.167969 25.164062zm70.6875-339.921875c3.714843 4.242188 5.300781 10.011719 4.464843 16.253906l-9.019531 67.667969h-102.0625l6.03125-90.5h85.0625c6.300781 0 11.8125 2.335938 15.523438 6.578125zm-213.019531 204.421875-6.035157-90.5h80.371094l-6.035156 90.5zm-8.035157-120.5-6.03125-90.5h96.433594l-6.03125 90.5zm-36.097656-90.5 6.03125 90.5h-112.769531l-12.066406-90.5zm-102.738281 120.5h110.769531l6.035156 90.5h-104.738281zm312.234375 90.5h-66.996094l6.035156-90.5h100.0625l-8.492187 63.703125c-1.9375 14.527344-15.957032 26.796875-30.609375 26.796875zm0 0" />
                                        </svg>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="hide">option-span</div>
<div class="container">
    <div class="text-center h1-like fw-400 hide show-m m-t-0 m-b-30">ВСЕ ТОВАРЫ</div>
</div>
<div class="container">
    <div class="row is-grid">
        @foreach ($products as $product)
            <div class="cell-4 p-b-50 cell-6-sm cell-12-xs">
                <div class="product-item">
                    <a class="product-image square rel-img no-transparent " href="{{ route('instashop.overview', $product) }}">
                        <img class="transition" src="{{ $product->image }}" alt="{{ $product->name }}" />
                    </a>
                    <div class="text-center m-t-30">
                        <a class="fw-700 text-uppercase h4-like"
                            href="{{ route('overview', $product) }}">{{ $product->name }}</a>
                        <div>
                            <span class="product-price fw-700">
                                {{ $product->price_format }}
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
<footer class="pallette_2 p-t-30">
    <div class="container">
        <div class="row is-grid flex-center">
            <div class="cell-">
                <div class="m-b-20">
                    <a href="{{ route('instashop.index') }}" title="InstaShop">
                        <img class="logotype show"
                            src="https://tailwindui.com/img/logos/workflow-mark.svg?color=indigo&shade=600"
                            alt="InstaShop" title="InstaShop" />
                    </a>
                </div>
            </div>
            <div class="cell-12 text-center m-b-20">
                <div class="footer-menu">
                    <ul class="no-list-style no-pad no-marg fw-300">
                        <li class="inline-top m-t-5 m-l-5 m-r-5 m-b-5 w-100-m m-l-0-m m-r-0-m"><a
                                href="{{ route('instashop.index') }}">Каталог</a></li>
                    </ul>
                </div>
            </div>
            <div class="cell-12 m-b-20">
                <ul class="social no-list-style p-0 m-t-0 m-b-0 ">
                    <li class="inline-middle m-l-10 m-r-10">
                        <a target="_blank" href="https://www.instagram.com" title="instagram" title="instagram">
                            <div class="fab fa-instagram" aria-hidden="true"></div>
                        </a>
                    </li>
                </ul>
                <div class="cell-12 buy-vars text-center">
                </div>
            </div>
        </div>
    </div>
</footer>
<script src="https://assets3.insales.ru/assets/1/1041/1336337/1582725497/jquery.min.js"></script>
<script src="https://assets3.insales.ru/assets/1/1041/1336337/1582725497/insales_theme_settings.js"></script>
<script src="https://assets3.insales.ru/assets/1/1041/1336337/1582725497/plugins.js"></script>
<script src="https://assets3.insales.ru/assets/1/1041/1336337/1582725497/theme.js"></script>
<script src="https://assets3.insales.ru/assets/1/1041/1336337/1582725497/mask.js"></script>
<div class="cart-popup side-popup transition pallette_1" custom-popup-modal="dynamic_basket">
    <div class="cart-title h2-like text-center p-b-20">Корзина</div>
    <div class="cart-items dynamic_basket js-dynamic_basket"></div>
</div>

<script src="/served_assets/shop/demoshop_panel-9d8ecd3c0e4224b72ab1bdeaa53bf0f21fcdabe0dae9af060011fc0040cee8e1.js">
</script>
<link rel="stylesheet" media="screen"
    href="/served_assets/shop/demoshop_panel-a7bb6ff61ba5696abfc00e1ad326417cc52cb2ccd5bf0f6b114bf316a4f47169.css" />
</div>
</body>

</html>
