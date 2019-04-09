@extends("layouts.master", ["title" => "Rechercher un bien"])

@section('content')
    <div class="row">
        <div class="col s12">
            <div class="section">
                <span class="flow-text center"><h1>{{ __("Que cherchez-vous ?") }}</h1></span>
            </div>
        </div>
    </div>
    @include("shared._info",["info" => "Que cherchez vous ?"])
    <div class="row container">
        <form action="{{ route('property.search.submit') }}" method="post">
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
                    <input placeholder="" id="surface" type="text" class="validate">
                    <label for="surface">{{ __("Surface (min) *") }}</label>
                </div>
                <div class="input-field col s6">
                    <input placeholder="" id="localite" type="text" class="validate">
                    <label for="localite">{{ __("Localité *") }}</label>
                </div>
                <div class="input-field col s6">
                    <input placeholder="" id="budget" type="text" class="validate">
                    <label for="budget">{{ __("Budjet (max) *") }}</label>
                </div>
                @include("shared._submit", ['title' => "Rechecher"])
            </div>
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