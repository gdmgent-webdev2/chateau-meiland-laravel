<?php

namespace App\Http\Controllers\Reservations\Create;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\Room;
use Illuminate\Http\Request;

class ShowCreateController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param Client $client
     * @return \Illuminate\Contracts\View\View
     */
    public function __invoke(Request $request, Client $client)
    {
        $rooms = Room::orderBy('number')->get();

        return view('pages.reservations.create', [
            'client' => $client,
            'rooms' => $rooms,
        ]);
    }
}
