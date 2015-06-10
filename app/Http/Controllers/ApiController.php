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
    	$target=$request->get('Target');
    	$message=$request->get('MSG');

        //沒有取得任何Request資料時，不執行Api
        if(!is_null($target)||!is_null($message))
        {
            $everybody = new SMSCurl('hchs','jkl45682');
            $everybody->setTarget([
                    $target
                ]);
            $everybody->setMessage($message);
            $everybody->send();
        }
    	//dd($everybody->getUrl());
    	//dd($request->get('Target'));
    	return view('every8d.index');

    }

}
