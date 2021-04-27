@extends('layout.master')

@section('content')


    <div class="row">
        <div class="medium-12 large-12 columns">
            <h4>@lang('app.reservations.create.title')</h4>
            <div class="medium-2  columns">Boeking voor:</div>
            <div class="medium-2  columns"><b>{{ $client->full_name }}</b></div>
            <form action="" method="post">
                <input type="hidden" name="_token" value="qbuQgVOYJ0tkLX6OPq5gYGJXqPG0Pke7VfuRXF53">
                <div class="medium-1  columns">Van:</div>
                <div class="medium-2  columns"><input name="dateFrom" value="" type="date" class="datepicker" /></div>
                <div class="medium-1  columns">Tot:</div>
                <div class="medium-2  columns"><input name="dateTo" value="" type="date" class="datepicker" /></div>
                <div class="medium-2  columns"><input class="button" type="submit" value="ZOEK" /></div>
            </form>

            <table class="stack">
                <thead>
                <tr>
                    <th width="200">Kamer</th>
                    <th width="200">Beschikbaarheid</th>
                    <th width="200">Actie</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($rooms as $room)
                        <tr>
                            <td>{{ $room->number }} ({{ $room->name }})</td>
                            <td>
                                <div class="callout success">
                                    <h7>Beschikbaar</h7>
                                </div>
                            </td>
                            <td></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection
