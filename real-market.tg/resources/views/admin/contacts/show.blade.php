@extends('layouts.admin', ["title" => "Voir le contact"])

@section('content')
    <div class="row">
        <div class="col s12 large">
            <div class="card blue-grey darken-1">
                <div class="card-content white-text">
                    <span class="card-title">{{ $contact->last_name . ' ' . $contact->first_name }}</span>
                    <p>{{ $contact->message }}</p>
                </div>
                <div class="card-action">
                    <a href="#" class="btn waves-effect waves-green yellow darken-2">{{ __('Contacter ' . $contact->first_name) }}</a>
                    <form action="{{ route('contacts.destroy', $contact->id) }}" method="post" class="right">
                        @csrf
                        @method('DELETE')
                        <button class="btn waves-effect waves-light waves-ripple red darken-2" type="submit" onclick="return confirm('Vraiment supprimer ce contact ?')" name="action">
                            <i class="fa fa-remove"></i> {{ __('Supprimer') }}
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop