<?php


Route::get('/', array('as'=>'home', 'uses'=>'HomeController@home'));

Route::get('/layout/cp_main', array('as'=>'cp', 'uses'=>'HomeController@home_cp'));
/*
 * Nao autenticados
 */

Route::group(array('before'=>'guest'), function(){

    /*
     * protecao CSRF group
     */

    Route::group(array('before='=>'csrf'),function(){

        Route::post('/account/create', array('as'=>'account-create-post','uses'=>'AccountController@postCreate'));

    });

    Route::get('/account/create', array('as'=>'account-create','uses'=>'AccountController@getCreate'));

    /*Pega o metodo get e post juntos, nao eh recomendado usar
    Route::controller('account','AccountController');
    */
});
