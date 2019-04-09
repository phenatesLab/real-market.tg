@extends("layouts.master", ["title" => "Abonnez-vous"])

@section('content')
    @include("shared._section", [
        "title" => "Newsletter",
        "paragraph" => "Abonnez vous à notre liste de diffusion pour ne rater aucune de nos nouvelles annonces"
    ])
    @include("shared._info", ["info" => "Inscription"])
    <div class="container">
        <form action="{{ route('join.newsletter.submit') }}" method="post">
            @csrf
            <div class="row">
                <div class="input-field col s12">
                    <input type="email" id="email"  class="validate">
                    <label for="email">{{ __('Email *') }}</label>
                </div>
                @include("shared._submit", ["title" => "Valider"])
            </div>
        </form>
    </div>

    @include("shared._foot", [
        "title" => "Nous contacter",
        "text" => "Contacter les experts de RealMarket pour de plus amples informations"
    ])
@stop