<?php

namespace App\Http\Controllers\Rooms\Create;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ShowCreateController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\View\View
     */
    public function __invoke(Request $request)
    {
        return view('pages.rooms.create');
    }
}
