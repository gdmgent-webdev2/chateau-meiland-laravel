<?php

namespace App\Http\Controllers\Rooms\Update;

use App\Http\Controllers\Controller;
use App\Models\Room;
use Illuminate\Http\Request;

class ShowUpdateController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param Room $room
     * @return \Illuminate\Contracts\View\View
     */
    public function __invoke(Request $request, Room $room)
    {
        return view('pages.rooms.update', [
            'room' => $room,
        ]);
    }
}
