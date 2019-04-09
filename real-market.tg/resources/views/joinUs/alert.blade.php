@extends("layouts.master", ["title" => "Créer une alerte"])

@section('content')
    @include("shared._section", [
        "title" => "Créer une alerte pour recevoir immédiatement les nouvelles annonces correspondant à vos critères",
        "paragraph" => "Notre rédaction vous enverra un mail à chaque fois qu'une annonce respectant vos citères sera publiée "
    ])
    @include("shared._info", ['info' => 'Critères de Recherche'])
    <div class="container">
        <form action="{{ route('join.alert.submit') }}" method="post">
            @csrf
            <div class="row">
                <div class="input-field col s6">
                    <select id="type">
                        <option value="" disabled selected>Choisir le type de bien</option>
                        @foreach($types as $type)
                            <option value="{{ $type->name }}">{{ $type->name }}</option>
                        @endforeach
                    </select>
                    <label for="type">{{ __("Type de bien *") }}</label>
                </div>
                <div class="input-field col s6">
                    <input type="number" id="surface" class="validate">
                    <label for="surface">{{ __("Surface (m²) *") }}</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s6">
                    <input type="text" id="localite" class="validate">
                    <label for="localite">{{ __("Localité *") }}</label>
                </div>
                <div class="input-field col s6">
                    <input type="number" id="budget" class="validate">
                    <label for="budget">{{ __("Budget (max) *") }}</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s6">
                    <input type="email" id="email" class="validate">
                    <label for="email">{{ __("Email *") }}</label>
                </div>
                <div class="input-field col s6">
                    <input type="tel" id="telephone" class="validate">
                    <label for="telephone">{{ __("Téléphone *") }}</label>
                </div>
            </div>
            @include("shared._submit", ["title" => "Valider"])
        </form>
    </div>

    @include("shared._foot", [
        "title" => "Nous contacter",
        "text" => "Contacter les experts de RealMarket pour de plus amples informations"
    ])
@stop

@section('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            let elems = document.querySelectorAll('select');
            let instances = M.FormSelect.init(elems);
        });
    </script>
@stop