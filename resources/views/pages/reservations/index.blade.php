@extends('layout.master')

@section('content')


    <div class="row">
        <div class="medium-12 large-12 columns">
            <h4>@lang('app.reservations.title')</h4>

            <table class="stack">
                <thead>
                <tr>
                    <th width="200">@lang('app.reservations.fields.room')</th>
                    <th width="200">@lang('app.reservations.fields.client')</th>
                    <th width="200">@lang('app.reservations.fields.dates')</th>
                    <th width="200">@lang('app.reservations.fields.action')</th>
                </tr>
                </thead>
                <tbody>

                @foreach ($reservations as $reservation)
                    <tr>
                        <td>{{ $reservation->room->name }}</td>
                        <td>{{ $reservation->client->full_name }}</td>
                        <td>{{ $reservation->start_date->format('d/m/Y') }} → {{ $reservation->end_date->format('d/m/Y') }}</td>
                        <td>
                            <form method="POST" action="{{ route('reservations.delete', $reservation->id) }}">
                                @method("DELETE")
                                @csrf
                                <button type="submit" class="button alert">Verwijderen</button>
                            </form>
                        </td>
                    </tr>
                @endforeach

                </tbody>
            </table>


        </div>
    </div>

@endsection
