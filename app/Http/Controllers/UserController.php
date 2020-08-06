<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Request;
use App\User;
use App\Order;


class UserController extends Controller
{
    public function userEdit(Request $request ){

        $user = Auth::user();


        if(Hash::check($request->oldPassword, $user->password)){
            if(!is_null($request->newPassword)){
                $user->password = Hash::make($request->newPassword); 
            }elseif(!is_null($request->image)){
            Storage::delete($user->image);
            $path = $request->file('image')->store('users', 's3');
            Storage::disk('s3')->setVisibility($path, 'public');
            $user['image'] = Storage::disk('s3')->url($path);                
            }

            $user->name = $request->name;
            $user->save();
        }
        return redirect()->route('account', 'orders');
    }
}
