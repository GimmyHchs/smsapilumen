<?php namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;
use App\Apis\Everybody\SMSCurl;

class ApiController extends BaseController
{
    //
    public function index(){

    	return 'You got the ApiController';

    }
    public function every8d(){

    	$everybody = new SMSCurl('hchs','jkl45682');
    	$everybody->setTarget([
    		'0916023011',
    		'0931055090'
    		]);
    	$everybody->setMessage('我在測試中文簡訊');
    	$everybody->send();
    	dd($everybody->getResponse());
    	return view('every8d.index');
    }
}
