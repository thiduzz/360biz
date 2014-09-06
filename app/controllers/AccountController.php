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
        return "coco";
    }
}