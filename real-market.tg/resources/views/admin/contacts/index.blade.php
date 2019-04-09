@extends("layouts.admin", ["title" => "Liste des contacts"])

@section('content')
    <div class="row">
        <h4 class="center">{{ __("Liste des contacts") }}</h4>
        <table>
            <thead>
            <tr>
                <th>*</th>
                <th>{{ __("Nom") }}</th>
                <th>{{ __("Prénom(s)") }}</th>
                <th>{{ __("Email") }}</th>
                <th>{{ __("Téléphone") }}</th>
                <th>{{ __("Sujet") }}</th>
                <th></th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            @foreach($contacts as $key => $contact)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $contact->last_name }}</td>
                    <td>{{ $contact->first_name }}</td>
                    <td>{{ $contact->email }}</td>
                    <td>{{ $contact->telephone }}</td>
                    <td>{{ $contact->subject }}</td>
                    <td><a href="{{ route('contacts.show', $contact->id) }}" class="btn green waves-effect waves-purple modal-trigger">Voir</a></td>
                    <td>
                        <form action="{{ route('contacts.destroy', $contact->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn waves-effect waves-light red" type="submit" onclick="return confirm('Vraiment supprimer cet utilisateur ?')" name="action">
                                <i class="fa fa-remove"></i> Supprimer
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@stop