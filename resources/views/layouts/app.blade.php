<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-100 h-screen antialiased leading-none font-sans">
    <div id="app">
        <header class="bg-blue-900 py-6">
            <div class="container mx-auto flex justify-between items-center px-6">
                <div>
                    <a href="{{ url('/') }}" class="text-lg font-semibold text-gray-100 no-underline">
                        {{ __('Comprehensive Care System for the Elderly Sector') }}
                    </a>
                </div>
                <nav class="space-x-4 text-gray-300 text-sm sm:text-base">
                    @guest
                    @if (Route::has('register'))
                    @endif
                    @else
                    <span>{{ Auth::user()->name }}</span>

                    <a href="{{ route('logout') }}"
                    class="no-underline hover:underline"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                        {{ csrf_field() }}
                    </form>
                    @endguest
                    <!--Comprobamos si el status esta a true y existe más de un lenguaje-->
                    @if (config('locale.status') && count(config('locale.languages')) > 1)

                    @foreach (array_keys(config('locale.languages')) as $lang)
                    @if ($lang != App::getLocale())
                    <a class="no-underline hover:underline" href="{!! route('lang.swap', $lang) !!}">
                        {!! $lang !!} <small>{!!  App::getLocale() !!}</small>
                    </a>
                    @endif
                    @endforeach
                    @endif
                </nav>
            </div>
        </header>

        @yield('content')
    </div>
</body>
</html>
