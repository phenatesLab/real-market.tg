<div class="section grey lighten-4" style="margin-top: 2rem">
    <div class="row">
        <div class="col m9">
            <h3>{{ $title }}</h3>
            <p>
            <h5 class="orange-text">{{ $paragraph }}</h5>
            </p>
        </div>
        <div class="col m3">
            @if(isset($image))
                <img src="{{ asset($image) }}" class="responsive-img" alt="">
            @endif
        </div>
    </div>
</div>