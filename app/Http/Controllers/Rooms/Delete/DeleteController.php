<?php

namespace App\Http\Controllers\Rooms\Delete;

use App\Http\Controllers\Controller;
use App\Models\Room;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param Room $room
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request, Room $room)
    {
        $room->delete();
        return redirect()->route('rooms');
    }
}
