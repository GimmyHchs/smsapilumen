<?php namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;

class AccountController extends BaseController
{
    //
    public function index(){

    	return view('account.index');
    }
}
