@extends('layout.master')

@section('content')


    <div class="row">
        <div class="medium-12 large-12 columns">
            <h4>KLANTEN</h4>
            <div class="medium-2  columns"><a class="button hollow success" href="{{ route('clients.create') }}">VOEG KLANT TOE</a></div>

            <table class="stack">
                <thead>
                <tr>
                    <th width="200">Name</th>
                    <th width="200">Email</th>
                    <th width="200">Action</th>
                </tr>
                </thead>
                <tbody>

                    @foreach ($clients as $client)
                        <tr>
                            <td>{{ $client->full_name }}</td>
                            <td>{{ $client->email }}</td>
                            <td>
                                <a class="hollow button" href="{{ route('clients.update', ['client' => $client->id]) }}">BEWERK</a>
                                <a class="hollow button warning" href="./reservations_new.html">BOEK EEN KAMER</a>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>


        </div>
    </div>

@endsection
