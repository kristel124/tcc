<?php

namespace App\Http\Responses;
use Laravel\Fortify\Contracts\RegisterResponse as RegisterResponseContract;
class RegisterResponse implements RegisterResponseContract

{
   public function toResponse($request)
   {
       // Log the user out right after registration
       auth()->logout();
       // Redirect them to the welcome page with a flash message
       return redirect('/')->with('success', 'Registration successful! Please log in to continue.');
   }

}