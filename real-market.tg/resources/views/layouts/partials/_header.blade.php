<div class="navbar-fixed">
    <nav class="nav-extended">
        <div class="nav-content">

        </div>
        <div class="nav-wrapper white">
            <span class="brand-logo ">
                <strong class="orange-text">{{ __("Real Market / Marché digital de l'imobilier") }}</strong>
            </span>
            <ul class="right">
                <li>
                    <a href="{{ route('property.search') }}" data-position="left" data-tooltip="Faire une recherche avancée"  class="btn waves-effect orange tooltipped">
                        {{ __("Rechercher") }}
                    </a>
                </li>
            </ul>
        </div>
        <div class="nav-wrapper indigo darken-4">
            <a href="{{ route('property.index') }}" data-position="right" data-tooltip="Voir la page d'accueil" class="brand-logo tooltipped">{{ __("Logo") }}</a>
            <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a class="dropdown-trigger" data-target="acheter" href="{{ route('property.index') }}">{{ __("Acheter / Louer") }}</a></li>
                <li><a class="dropdown-trigger" data-target="contribuer" href="">{{ __("Contribuer") }}</a></li>
                <li><a class="tooltipped" data-tooltip="Déterminer un critère de recherche" href="{{ route('join.alert') }}">{{ __("Alerte") }}</a></li>
                <li><a class="tooltipped" data-tooltip="Contactez les experts de RealMarket" href="{{ route('join.contact') }}">{{ __("Contact") }}</a></li>
                <li><a class="tooltipped" data-tooltip="S'inscrire à notre liste de diffusion" href="{{route('join.newsletter')}}">{{ __("Newsletter") }}</a></li>
                @auth
                    <li>
                        <a data-target="user-drop" class="dropdown-trigger" href="">
                            <img src="{{ 'storage/' . Auth::user()->avatar }}" alt="" class="responsive-img circle center" style="height: 2.5rem; padding-top: 1rem">
                        </a>

                        <ul id="user-drop" class="dropdown-content">
                            <li><a href="#">Tableau de bord</a></li>
                            <li><a href="{{ route('profile.avatar', Auth::user()->name) }}">Profile</a></li>
                            <li>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Déconnection') }}
                                </a>
                            </li>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </ul>
                    </li>
                @endauth
                @guest
                    <li><a class="btn waves-effect deep-orange tooltipped pulse" data-tooltip="Voir votre profile" href="{{route('login')}}">{{ __("Se connecter") }}</a></li>
                @endguest
            </ul>
        </div>
    </nav>
</div>

<ul id="acheter" class="dropdown-content">
    <li><a class="tooltipped" data-position="left" data-tooltip="Voir les biens en vente" href="">{{ __("Acheter") }}</a></li>
    <li><a class="tooltipped" data-position="right" data-tooltip="Voir les biens en location" href="">{{ __("Louer") }}</a></li>
</ul>

<ul id="contribuer" class="dropdown-content">
    <li><a class="tooltipped" data-position="right" data-tooltip="Créer une annonce" href="{{ route('property.create') }}">{{ __("Confier") }}</a></li>
    <li><a class="tooltipped" data-position="bottom" data-tooltip="Créer un compte sur RealMarket" href="{{ route('register') }}">{{ __("S'inscrire") }}</a></li>
</ul>