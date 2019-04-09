<div class="row">
    <div class="input-field col s6">
        @if(isset($types))
            <select id="type">
                <option value="" disabled selected>Choisir le type de bien</option>
                @foreach($types as $type)
                    <option value="{{ $type->name }}">{{ $type->name }}</option>
                @endforeach
            </select>
            <label for="type">{{ __("Type de bien *") }}</label>
        @else
            <input type="number" id="{{ $first }}" class="validate">
            <label for="{{ $first }}">{{ $first }}</label>
        @endif

    </div>
    <div class="input-field col s6">
        <input type="number" id="surface" class="validate">
        <label for="surface">{{ __("Surface *") }}</label>
    </div>
</div>
<div class="row">
    <div class="input-field col s6">
        <input type="text" id="localite" class="validate">
        <label for="localite">{{ __("Localité *") }}</label>
    </div>
    <div class="input-field col s6">
        <input type="text" id="price" class="materialize-textarea">
        <label for="price">{{ __("Prix estimé *") }}</label>
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