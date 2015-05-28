<?php

class UserLogin extends BaseController {

    public function user()
    {
        //Recibe los datos del Formulario
        $userdata = array(
            'username'=>Input::get('username'),
            'password'=>Input::get('password')
        );

        //Realizamos la validacion con la funcion interna de laravel (attempt)
        if(Auth::attempt($userdata))
        {
            // we are now logged in, go to admin
            return View::make('hello');
        }
        else
        {
            return Redirect::to('/')->with('login_errors',true);
        }
    }
}