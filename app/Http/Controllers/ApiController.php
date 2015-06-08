<?php namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;

class ApiController extends BaseController
{
    //
    public function index(){

    	return 'You got the ApiController';
    }
    public function every8d(){

    	return view('every8d.index');
    }
}
