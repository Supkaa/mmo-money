<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\Game;

class BasketController extends Controller
{
    public function basketConfirm(Request $request){

        $games = Game::get();
        $orderId = session('orderId');
        $order = Order::create();
        $order->email = $request->email;
        $order->nickname = $request->nickname;
        $order->server = $request->input('server');
        $order->count = $request->total_price;
        $order->status=1;
        $order->save();
        
        session()->forget('orderId');
        return redirect()->route('account'); 
    }


}
