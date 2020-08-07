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
        $order->gold = $request->count;
        $order->count = $request->total_price;
        $order->status=1;
        $order->save();
        
        session()->forget('orderId');
        return redirect()->route('account'); 
    }

    public function adminConfirm(Request $request){

        $games = Game::get();
        $orderId = $request->id;
        $order = Order::find($orderId);
        $order->admin_confirm = 1;
        $order->save();

        if($order->user_confirm == 1 and $order->admin_confirm == 1){
            $order->status = 0;
            $order->save();
            session()->forget('orderId');
        }
        return redirect()->route('orders');

    }
    public function userConfirm(Request $request){

        $orderId = $request->id;
        $order = Order::find($orderId);
        $order->user_confirm = 1;
        $order->save();


        if($order->user_confirm == 1 and $order->admin_confirm == 1){
            $order->status = 0;
            $order->save();
            session()->forget('orderId');
        }
        return redirect()->route('account');

    }

}
