@extends("layouts.master", ["title" => "Proposez votre bien"])

@section('content')
    @include("shared._section", [
        "title" => "Confiez vos biens aux professionnels de RealMarket pour assurer leur vente rapide en toute
            sécurité et en toute quiétude",
        "paragraph" => "Cette offre est réservé uniquement aux particuliers qui aimeraient mettre en vente ou en location
            leurs biens immobiliers",
         "image" => "images/sites/confier.jpg"
    ])

    <div class="container">
        <form action="{{ route('property.store') }}" method="post">
            @csrf
            <div class="row">
                <div class="input-field col s12">
                    <div class="inline">
                        <label>Vous souhaitez * : </label>
                        <label>
                            <input class="with-gap" name="group1" type="radio" checked/>
                            <span>Vendre</span>
                        </label>
                        <label>
                            <input class="with-gap" name="group1" type="radio" />
                            <span>Louer</span>
                        </label>
                    </div>
                </div>
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
                    <label for="surface">Surface (m²) *</label>
                </div>
                <div class="input-field col s6">
                    <input type="number" id="rooms" class="validate">
                    <label for="rooms">Chambres *</label>
                </div>
                <div class="input-field col s6">
                    <input type="number" id="bedrooms" class="validate">
                    <label for="bedrooms">Chambre à coucher *</label>
                </div>
                <div class="input-field col s6">
                    <input type="number" id="floor" class="validate">
                    <label for="floor">Etage *</label>
                </div>
                <div class="input-field col s6">
                    <input type="text" id="heat" class="validate" data-length="3">
                    <label for="heat">Electricité *</label>
                </div>
                <div class="input-field col s6">
                    <input type="text" id="address" class="validate">
                    <label for="address">Adresse *</label>
                </div>
                <div class="input-field col s6">
                    <input type="text" id="postal_code" class="validate">
                    <label for="postal_code">Code postal</label>
                </div>
                <div class="input-field col s6">
                    <input type="text" id="city" class="validate">
                    <label for="city">Ville *</label>
                </div>
                <div class="input-field col s6">
                    <input type="text" id="district" class="validate">
                    <label for="district">Quartier *</label>
                </div>
                <div class="input-field col s12">
                    <div class="file-field">
                        <div class="btn">
                            <span>Image *</span>
                            <input type="file">
                        </div>
                        <div class="file-path-wrapper">
                            <input class="file-path validate" type="text" placeholder="Image du bien">
                        </div>
                    </div>
                </div>
            </div>
            @include('shared._submit', ["title" => "valider"])
        </form>
    </div>

    @include("shared._foot", [
        "title" => "Créer une Alerte",
        "text" => "Recevez immédiatement toutes les nouvelles annonces correspondant à vos critères de recherches"
    ])
@stop

@section('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            let elems = document.querySelectorAll('select');
            let instances = M.FormSelect.init(elems);
        });

        $(document).ready(function() {
            $('input#heat').characterCounter();
        })
    </script>
@stop