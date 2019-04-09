@extends("layouts.master", ["title" => "Contactez-nous"])

@section('content')
    @include("shared._section", [
        "title" => "Nous contactez ?",
        "paragraph" => "Contactez les experts de RealMarket pour de plus amples informations"
    ])
    @include("shared._info", ['info' => 'Vos coordonnées'])
    <div class="container">
        <form action="{{ route('join.contact.submit') }}" method="post">
            @csrf
            <div class="row">
                <div class="input-field col s6">
                    <input type="text" id="last_name" class="{{ $errors->has('last_name') ? ' invalid' : ' validate' }}" value="{{ old('last_name') }}" name="last_name" data-length="20" autofocus>
                    <label for="last_name">{{ __("Nom *") }}</label>
                    <span class="helper-text" data-error="{{ $errors->has('last_name') ? $errors->first('last_name') : "Oups !'" }}" data-success="Bien"></span>
                </div>
                <div class="input-field col s6">
                    <input type="text" id="first_name" class="{{ $errors->has('first_name') ? ' invalid' : ' validate' }}" value="{{ old('first_name') }}" name="first_name" data-length="30">
                    <label for="first_name">{{ __("Prénom(s) *") }}</label>
                    <span class="helper-text" data-error="{{ $errors->has('first_name') ? $errors->first('first_name') : "Oups !'" }}" data-success="Bien"></span>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s6">
                    <input type="email" id="email" class="{{ $errors->has('email') ? ' invalid' : ' validate' }}" value="{{ old('email') }}" name="email">
                    <label for="email">{{ __("Email *") }}</label>
                    <span class="helper-text" data-error="{{ $errors->has('email') ? $errors->first('email') : "Oups !'" }}" data-success="Bien"></span>
                </div>
                <div class="input-field col s6">
                    <input type="tel" id="telephone" name="telephone" class="{{ $errors->has('telephone') ? ' invalid' : ' validate' }}" value="{{ old('telephone') }}">
                    <label for="telephone">{{ __("Téléphone *") }}</label>
                    <span class="helper-text" data-error="{{ $errors->has('telephone') ? $errors->first('telephone') : "Oups !'" }}" data-success="Bien"></span>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s6">
                    <input type="text" id="subject" class="{{ $errors->has('subject') ? ' invalid' : ' validate' }}" value="{{ old('subject') }}" name="subject" data-length="30">
                    <label for="subject">{{ __("Sujet *") }}</label>
                    <span class="helper-text" data-error="{{ $errors->has('subject') ? $errors->first('subject') : "Oups !'" }}" data-success="Bien"></span>
                </div>
                <div class="input-field col s6">
                    <textarea type="text" id="message" name="message" class="materialize-textarea{{ $errors->has('message') ? ' invalid' : ' validate' }}" data-length="200"></textarea>
                    <label for="message">{{ __("Message *") }}</label>
                    <span class="helper-text" data-error="{{ $errors->has('first_name') ? $errors->first('message') : "Oups !'" }}" data-success="Bien"></span>
                </div>
            </div>
            @include("shared._submit", ["title" => "Envoyer"])
        </form>
    </div>
@stop

@section('scripts')
    <script>
        $(document).ready(function() {
            $('input#first_name, input#last_name, input#subject, textarea#message').characterCounter();
        })
    </script>
@stop