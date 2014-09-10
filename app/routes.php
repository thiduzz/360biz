<?php


Route::get('/', array('as'=>'home', 'uses'=>'HomeController@home'));

Route::get('/cp_main', array('as'=>'cp', 'uses'=>'HomeController@home_cp'));

Route::get('/user/{username}', array('as'=>'profile-user', 'uses' =>'ProfileController@getUser' ));
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

        Route::post('/', array('as'=>'account-signin-min-post','uses'=>'AccountController@postSignInMin'));

        Route::post('/account/recovery', array('as'=>'account-recovery-post','uses'=>'AccountController@postRecoveryMin'));

        Route::post('/account/recovery', array('as'=>'account-recovery-post','uses'=>'AccountController@postRecovery'));
    });

    Route::get('/account/create', array('as'=>'account-create','uses'=>'AccountController@getCreate'));

    Route::get('/account/signin', array('as'=>'account-signin','uses'=>'AccountController@getSignIn'));

    Route::get('/account/activate/{code}', array('as'=>'account-activate', 'uses'=> 'AccountController@getActivate'));


    /*Pega o metodo get e post juntos, nao eh recomendado usar
    Route::controller('account','AccountController');
    */
});

/*
 * Autenticados
 */

Route::group(array('before'=>'auth'), function(){

    Route::group(array('before='=>'csrf'),function(){

        Route::post('/account/change-password', array('as'=>'account-change-password-post', 'uses'=>'AccountController@postChangePassword'));
    });

    Route::get('/account/signout', array(
       'as' => 'account-signout',
        'uses' => 'AccountController@getSignOut'
    ));

    Route::get('/account/password-change', array('as'=>'change-security', 'uses'=>'AccountController@getSecurityView'));

});
