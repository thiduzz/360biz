<?php

class AccountController extends BaseController{

    /** get signout - nao precisa postar nada, so redirecionar */
    public function getSignOut()
    {
        Auth::logout();
        return Redirect::route('layout.cp_main');
    }


    /** get the signin view */
    public function getSignIn()
    {
        return View::make('account.signin');
    }

    /** post data from the form */
    public function postSignIn()
    {
        $validator = Validator::make(Input::all(), array(
           'username' => 'required|max:50',
           'password' => 'required|min:6|max:20'
        ));

        if($validator->fails())
        {
            return Redirect::route('account-signin')
                ->withInput()
                ->withErrors($validator);
        }else{
            $auth = Auth::attempt(array(
                'username' => Input::get('username'),
                'password' => Input::get('password'),
                'active' => 1
            ));
            if($auth)
            {
                return Redirect::intended('/');
            }else{
                return Redirect::route('account-signin')->with('global','O usuário/senha está incorreto, tente novamente');
            }
        }
        return Redirect::route('account-signin')->with('global','O login falhou, talvez sua conta está inativa');
    }

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
                'name'=>'required|max:50|min:3',
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
            $name = Input::get('name');
            $code = str_random(60);

            $user = User::create(array(
                'username' => $username,
                'name'=> $name,
                'email' => $email,
                'password' => Hash::make($password),
                'activation_code' => $code,
                'user_status' => 'inactive'
            ));

            if($user)
            {
                Mail::send('emails.auth.activate', array('link'=> URL::route('account-activate', $code), 'username' => $username, 'name' => $name), function($message) use ($user){
                   $message->to($user->email, $user->username)->subject('Ativação de Conta - 360Bis');
                });

                return Redirect::route('account-create')
                    ->with(array('global' => 'mail', 'email' => $email));
            }
        }
    }

    public function getActivate($code)
    {
        $user = User::where('activation_code', '=', $code)->where('active','=',0);
        if($user->count())
        {
            $user = $user->first();
            $user->active = 1;
            $user->activation_code = '';
            //ativa o usuario e altera a o codigo de ativacao (nao tem mais uso...)
            if($user->save())
            {
               return Redirect::route('account-create')->with('global','activation-success');
            }
        }
        return Redirect::route('account-create')->with('global','activation-fail');
    }
}