<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactoController extends Controller
{
    public function sendEmail(Request $request )
    {
        $name=$request->input('name');
        $array = array('1' => 'uno',
               '2' => 'dos',
               '3' => 'tres',
               '4' => $name,
            );
        return $array;
    }

}
