@extends('layouts.master', ["title" => "Acherter / Louer"])

@section('content')
    <div class="container" style="margin-top: 2.5rem">
        <div class="card-panel">
            <p class="flow-text">
                <h4>{{ __("Votre nouvelle maison ?") }}</h4>
                <h4>{{ __("C'est par ici !") }}</h4>
            </p>
            <div class="card-panel orange">
                <form action="" method="post">
                    @csrf
                    <div class="row">
                        <div class="input-field col s12 m6 l3">
                            <input type="text" id="city" class="validate">
                            <label for="city">Ville</label>
                        </div>
                        <div class="input-field col s12 m6 l3">
                            <input type="text" id="surface" class="validate">
                            <label for="surface">Surface (m²)</label>
                        </div>
                        <div class="input-field col s12 m6 l3">
                            <input type="text" id="min_budget" class="validate">
                            <label for="min_budget">Budjet min</label>
                        </div>
                        <div class="input-field col s12 m6 l3">
                            <input type="text" id="max_budget" class="validate">
                            <label for="max_budget">Budjet max</label>
                        </div>
                        <div class="input-field col s12 m4 push-m4">
                            <button class="btn waves-effect waves-light" type="submit" name="action">Rechercher
                                <i class="material-icons right">send</i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col s12">
            <ul class="tabs">
                <li class="tab col s3"><a href="#test1">{{ __("Acheter") }}</a></li>
                <li class="tab col s3"><a class="active" href="#test2">{{ __("Louer") }}</a></li>
            </ul>
        </div>
        <div id="test1" class="col s12">
            <div class="row container">
                @foreach($properties as $property)
                    @if($property->for_sale)
                        <div class="small card col s12 m6 l4 hoverable">
                            <div class="card-content">
                                <div class="card-title">{{ $property->title }}</div>
                                <p class="">
                                    {{ $property->description }}
                                </p>
                            </div>
                            <div class="card-action">
                                <a href="">{{ $property->city }}</a>
                                <a href="">{{ $property->rooms }}</a>
                                <a href="">{{ $property->bedrooms }}</a>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>

            <div class="section center">
                {{ $links }}
            </div>
        </div>
        <div id="test2" class="col s12">
            <div class="row container">
                @foreach($properties as $property)
                    @if($property->for_sale)
                        <div class="card horizontal">
                            <div class="card-image">
                                <img src="{{ asset('images/sites/222_Belle_Maison_09x.jpg') }}" alt="">
                            </div>
                            <div class="card-stacked">
                                <div class="card-content">
                                    <div class="row">
                                        <div class="col s12">
                                            <a href="">{{ $property->city }} <i class="fa-2x fa-map-marker prefix"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-action">
                                    <a href="#">This is a link</a>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>

            <div class="section center">
                {{ $links }}
            </div>
        </div>
    </div>

    @include("shared._foot", [
        "title" => "Créer une Alerte",
        "text" => "Recevez immédiatement toutes les nouvelles annonces correspondant à vos critères de recherches"
    ])
@stop

@section('scripts')
    <script>
        $(document).ready(function(){
            $('.tabs').tabs({
                swipeable: true
            });
        });
    </script>
@stop