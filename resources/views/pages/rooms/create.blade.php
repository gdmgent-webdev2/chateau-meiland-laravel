@extends('layout.master')

@section('content')


    <div class="row">
        <div class="medium-12 large-12 columns">
            <h4>Nieuwe kamer</h4>

            @include('pages.rooms.form', [
                'action' => route('rooms.create'),
                'label' => 'Aanmaken',
                'room' => null,
            ])
        </div>
    </div>

@endsection
