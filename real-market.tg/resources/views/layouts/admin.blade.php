<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $title . ' - Real Market' ?? 'Real Market' }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/materialize.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
<div class="navbar-fixed">
    <nav class="indigo darken-4">
        <a class="brand-logo" href="{{ url('/') }}">
            {{ __('RealMarket') }}
        </a>
        <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>

        <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li>
                <a data-target="admin-drop" class="dropdown-trigger" href="#!">
                    {{ Auth::user()->name }}
                </a>

                <ul id="admin-drop" class="dropdown-content">
                    <li>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                            {{ __('Se déconnecter') }}
                        </a>
                    </li>

                    <li>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>
</div>

<div class="row"></div>
<div class="row">
    <div class="col s3 indigo darken-2">
        <ul class="collapsible">
            <li class="hoverable">
                <div class="collapsible-header"><a href="{{ route('user.index') }}">{{ __("Utilisateurs") }}</a></div>
            </li>
            <li>
                <div class="collapsible-header"><a href="{{ route('properties.index') }}">{{ __("Biens") }}</a></div>
            </li>
            <li>
                <div class="collapsible-header"><a href="{{ route('alerts.index') }}">{{ __("Alertes") }}</a></div>
            </li>
            <li>
                <div class="collapsible-header"><a href="{{ route('contacts.index') }}">{{ __("Contacts") }}</a></div>
            </li>
            <li>
                <div class="collapsible-header"><a href="{{ route('newsletter.index') }}">{{ __("Newsletter") }}</a></div>
            </li>
        </ul>
    </div>
    <div class="col s9 orange darken-2">
        @yield('content')
    </div>
</div>

@include('layouts.partials._footer')

<!-- Scripts -->
<script src="{{ asset('js/jquery-3.2.1.min.js') }}" defer></script>
<script src="{{ asset('js/materialize.min.js') }}" defer></script>

<script>
    $('.dropdown-trigger').dropdown({
        constrainWidth: false,
        coverTrigger: false,
        hover: true,
        inDuration: 300,
        outDuration: 200
    });
</script>

@yield('scripts')
</body>
</html>
