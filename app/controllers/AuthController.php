<?php

class AuthController extends \BaseController
{
    public function login()
    {
        $email = Input::get('email');
        $password = Input::get('password');
        //Auth
        if (Auth::attempt(array(
            'email' => $email,
            'password' => $password,
            'status' => 'active'))) {
            // The user is active, not suspended, and exists.
            $data = array('email' => $email, 'password' => $password);
            return Redirect::intended('profile');
        }

        

    }


    public function logout()
    {
        //
        Auth::logout();
        return View::make('users.register');
    }
}
