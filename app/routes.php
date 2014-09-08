<?php


Route::get('/', array('as'=>'home', 'uses'=>'HomeController@home'));

Route::get('/cp_main', array('as'=>'cp', 'uses'=>'HomeController@home_cp'));
/*
 * Nao autenticados
 */

Route::group(array('before'=>'guest'), function(){

    /*
     * protecao CSRF group
     */

    Route::group(array('before='=>'csrf'),function(){

        Route::post('/account/create', array('as'=>'account-create-post','uses'=>'AccountController@postCreate'));

        Route::post('/account/signin', array('as'=>'account-signin-post','uses'=>'AccountController@postSignIn'));
    });

    Route::get('/account/create', array('as'=>'account-create','uses'=>'AccountController@getCreate'));

    Route::get('/account/signin', array('as'=>'account-signin','uses'=>'AccountController@getSignIn'));

    Route::get('/account/activate/{code}', array('as'=>'account-activate', 'uses'=> 'AccountController@getActivate'));


    /*Pega o metodo get e post juntos, nao eh recomendado usar
    Route::controller('account','AccountController');
    */
});
