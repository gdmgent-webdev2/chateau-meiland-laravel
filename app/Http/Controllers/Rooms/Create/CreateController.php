<?php

namespace App\Http\Controllers\Rooms\Create;

use App\Http\Controllers\Controller;
use App\Http\Requests\RoomRequest;
use App\Models\Room;
use Illuminate\Http\Request;

class CreateController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function __invoke(RoomRequest $request)
    {
        Room::create($request->all());

        return redirect()->route('rooms');
    }
}
