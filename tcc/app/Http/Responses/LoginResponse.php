<?php

namespace App\Http\Responses;

use Laravel\Fortify\Contracts\LoginResponse as LoginResponseContract;

class LoginResponse implements LoginResponseContract
{
    public function toResponse($request)
    {
        $user = $request->user();

        if ($user->user_type === 'admin') {
            return redirect()->intended('/admin/dashboard');
        } elseif ($user->user_type === 'seller') {
            return redirect()->intended('/seller/dashboard');
        } else {
            return redirect()->intended('/user/dashboard');
        }
    }
}
