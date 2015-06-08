<?php namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;
use App\Apis\Everybody\SMSCurl;
use Illuminate\Http\Request;

class ApiController extends BaseController
{

    //
    public function index(){

    	return 'You got the ApiController';

    }
    public function every8d(Request $request){

    	$everybody = new SMSCurl('hchs','jkl45682');
    	$everybody->setTarget([
    		'0916023011',
    		'0931055090',
    		'0982704434'
    		]);
    	$everybody->setMessage('我在測試中文簡訊');
    	//$everybody->send();
    	dd($request);
    	return view('every8d.index');
    }

}
