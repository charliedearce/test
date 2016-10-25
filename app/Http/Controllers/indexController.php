<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use View;
use Redirect;

class indexController extends baseController
{
    public function Send(Request $request)
    {
        /*
        $rules = array(
            'MessageTo' => 'required|numeric|digits:10',
            'answer' => 'required|same:canswer'
        );
        $messages = array(
            'same'    => 'Incorrect Captcha! Try again.',
            'numeric'    => 'Invalid Phone number.',
            'digits' => 'Invalid Phone number.'

        );

        $validator = Validator::make(Input::all(), $rules, $messages);
        if ($validator->fails()){

            return redirect('/')
                ->withInput($request->all())
                ->withErrors($validator);
        }else{

            $mydata= array(
                "MessageTo" => '0'.Input::get('MessageTo'),
                "MessageText" => Input::get('MessageText'),
                "key"         => 'd8cd10b920dcbdb5163ca0185e402357bc27c265',
                "ip"          => $request->ip(),
                "domain"      => $_SERVER['HTTP_HOST']
            );

            $data =  $this->api('http://myapi.freetext4all.com/api/send', $mydata );
            return redirect()->back()->with('status', $data['status']);
        }
*/
        $mydata= array(
            "MessageTo" => '0'.Input::get('MessageTo'),
            "MessageText" => Input::get('MessageText'),
            "key"         => 'd8cd10b920dcbdb5163ca0185e402357bc27c265',
            "ip"          => $request->ip(),
            "domain"      => $_SERVER['HTTP_HOST']
        );

        $data =  $this->api('http://myapi.freetext4all.com/api/send', $mydata );

        return response($data['status']);

    }
}
