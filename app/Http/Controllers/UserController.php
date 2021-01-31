<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Search user and get tickets of it
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function searchAndGetActiveTickets(Request $request)
    {
        if ($request->missing('email')) {
            abort(400, 'No email provided');
        }

        $email = $request->input('email');

        $user = User::with(['tickets' => function (HasMany $query) {
                $query->active();
            }])
            ->whereEmail($email)
            ->firstOrFail();

        return $user->tickets;
    }
}
