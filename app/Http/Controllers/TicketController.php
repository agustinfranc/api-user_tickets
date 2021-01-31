<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    /**
     * Search ticket and get status of it
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function searchAndGetStatus(Request $request)
    {
        if ($request->missing('code')) {
            abort(400, 'No code provided');
        }

        $code = $request->input('code');

        $ticket = Ticket::has('user')
            ->whereCode($code)
            ->firstOrFail();

        return $ticket->active;
    }
}
