@extends('layout.master')

@section('content')


    <div class="row">
        <div class="medium-12 large-12 columns">
            <h4>Update kamer</h4>

            @include('pages.rooms.form', [
                'action' => route('rooms.update', $room->id),
                'label' => 'Aanpassen',
                'room' => $room,
            ])
        </div>
    </div>

@endsection
