<?php namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;

class DocumentController extends BaseController
{
    //
    public function index(){

    	return view('document.index');
    }
}
