<?php

class AccountController extends BaseController{

    /** get the form view**/
    public function getCreate()
    {
        return View::make('account.create');
    }

    /** post the data from form**/
    public function postCreate()
    {
        $validator = Validator::make(Input::all(),
            array(
                'username' => 'required|max:50',
                'email' => 'required|max:50|email',
                'email_again' => 'required|same:email',
                'password' => 'required|max:20|min:6',
                'password_again' => 'required|same:password'
            ));
        if($validator->fails())
        {
            return Redirect::route('account-create')
                ->withErrors($validator)
                ->withInput();
        }else{
            $username = Input::get('username');
            $email = Input::get('email');
            $password = Input::get('password');
            $code = str_random(60);

            $user = User::create(array(
               'username' => $username,
                'email' => $email,
                'password' => Hash::make($password),
                'activation_code' => $code,
                'status' => 'inactive'
            ));

            if($user)
            {
                Redirect::route('home')
                    ->with('global','Sua conta foi criada! Favor ative sua conta, no email que foi enviado no email informado no cadastro.');
            }
        }
    }
}