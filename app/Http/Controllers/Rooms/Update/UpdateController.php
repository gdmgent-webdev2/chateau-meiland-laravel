<?php

namespace App\Http\Controllers\Rooms\Update;

use App\Http\Controllers\Controller;
use App\Http\Requests\RoomRequest;
use App\Models\Room;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param RoomRequest $request
     * @param Room $room
     * @return \Illuminate\Http\RedirectResponse
     */
    public function __invoke(RoomRequest $request, Room $room)
    {
        $room->fill($request->all());
        $room->save();

        return redirect()->route('rooms');
    }
}
