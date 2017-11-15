<?php

namespace App\Http\Controllers;

use App\Payment;
use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Query for top 10 highest paying users to pass down.
        $users = User::join('payments', 'users.id', '=', 'payments.user_id')
            ->selectRaw('users.id, name, image_url, tagline, sum(payments.amount) as amount_sum')
            ->orderBy('amount_sum', 'desc')
            ->groupBy('users.id', 'name', 'image_url', 'tagline')
            ->limit(10)
            ->get();

        if ($users->isEmpty())
        {
            return view('home.join');
        }

        return view('home.index', compact('users'));
    }
}
