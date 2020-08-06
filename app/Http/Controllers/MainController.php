<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Game;
use App\Service;
use App\Order;

class MainController extends Controller
{
    public function index()
    {
        $games = Game::get();
        return view('index', compact('games'));
    }

    public function account()
    {
        $orders = Order::where('status',1)->get();
        
        return view('auth.user.account', compact('orders'));
    }

    public function login()
    {
        return view('auth.login');
    }

    public function registration()
    {
        return view('auth.register');
    }

    public function game($code)
    {

        $game = Game::where('code', $code)->first();
        return view('game', compact('game'));
    }
}
