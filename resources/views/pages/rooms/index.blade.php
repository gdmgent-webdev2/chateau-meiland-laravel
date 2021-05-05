@extends('layout.master')

@section('content')


    <div class="row">
        <div class="medium-12 large-12 columns">
            <h4>@lang('app.rooms.title')</h4>
            <div class="medium-2  columns"><a class="button hollow success" href="{{ route('rooms.create') }}">@lang('app.rooms.add')</a></div>

            <table class="stack">
                <thead>
                <tr>
                    <th width="200">@lang('app.rooms.fields.number')</th>
                    <th width="200">@lang('app.rooms.fields.name')</th>
                    <th width="200">@lang('app.rooms.fields.action')</th>
                </tr>
                </thead>
                <tbody>

                    @foreach ($rooms as $room)
                        <tr>
                            <td>{{ $room->number }}</td>
                            <td>{{ $room->name }}</td>
                            <td>
                                <a class="hollow button" href="{{ route('rooms.update', $room->id) }}">BEWERK</a>
                                <form method="POST" action="{{ route('rooms.delete', $room->id) }}">
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
