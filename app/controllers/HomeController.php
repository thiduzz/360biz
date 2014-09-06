<?php

class HomeController extends BaseController {

    public function home(){
        /**exemplos
        Mail::send('emails.auth.test', array('name'=>'Thiago'),function($message)
        {
            $message->to('test360bis@gmail.com','Thi')->subject('Test email');
        });
        echo $user = User::find(1)->username;
         * **/
        return View::make('home');
    }

}
