@component('mail::message')
# Reservatie bevestigd

Beste {{ $reservation->client->full_name }},

Er is een reservatie voor u aangemaakt van {{ $reservation->start_date->format('d/m/Y') }} tot {{ $reservation->end_date->format('d/m/Y') }}.
U zal verblijven in kamer {{ $reservation->room->name }}.

Tot dan,<br>
{{ config('app.name') }}
@endcomponent
