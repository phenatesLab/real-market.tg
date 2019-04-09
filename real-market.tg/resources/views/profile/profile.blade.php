@extends("layouts.master", ["title" => "Photo de profile"])

@section('content')
    <div class="container">
        <form action="{{ route('profile.avatar.submit', Auth::user()->name) }}" method="post">
            @csrf
            <div class="row">
                <div class="col s8 push-s4 file-field input-field">
                    <div class="btn">
                        <span>Image</span>
                        <input type="file">
                    </div>
                    <div class="file-path-wrapper">
                        <input placeholder="Choissisez une image" class="file-path validate" type="text">
                    </div>
                </div>
            </div>
        </form>
    </div>
@stop