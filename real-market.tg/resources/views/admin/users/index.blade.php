@extends("layouts.admin", ["title" => "Liste des utilisateurs"])

@section('content')
    <div class="row">
        <h4 class="center">{{ __("Liste des utilisateurs") }}</h4>
        <table>
            <thead>
                <tr>
                    <th>*</th>
                    <th>{{ __("Nom") }}</th>
                    <th>{{ __("Prénom(s)") }}</th>
                    <th>{{ __("Email") }}</th>
                    <th>{{ __("Téléphone") }}</th>
                    <th>{{ __("Sujet") }}</th>
                    <th>{{ __("Message") }}</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $key => $user)
                    <tr>
                        <th>{{ $key }}</th>
                        <th>{{ $user->first_name }}</th>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@stop

@section('scripts')
    <script>

    </script>
@stop