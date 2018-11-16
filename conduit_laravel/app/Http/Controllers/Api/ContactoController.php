<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Mail;

class ContactoController extends Controller
{
    public function sendEmail(Request $request )
    {
         //guarda el valor de los campos enviados desde el form en un array
       /* $data = $request->all();
 
       //se envia el array y la vista lo recibe en llaves individuales {{ $email }} , {{ $subject }}...
       
        \Mail::send('emails.message', $data, function($message) use ($request)
       {
           //remitente
           $message->from($request->email, $request->name);
 
           //asunto
           $message->subject($request->name);
 
           //receptor
           $message->to(env('MAIL_FROM_ADDRESS'), env('MAIL_FROM_NAME'));
 
       });
       return \View::make('success'); */


        $name=$request->input('name');
        $email=$request->input('email');
        $array = array('1' => 'uno',
               '2' => 'dos',
               '3' => 'tres',
               '4' => $name,
            );
     /*    return $array;

        
        $data = array(
            'saludo' => "Hola Mundo",
        ); */
        
        $sent = Mail::send('emails.email', $array, function ($message){
            $message->subject('Test email');
            $message->from('gmc.yanez@gmail.com', 'ruralshoponti');
            $message->to('gmc.yanez@gmail.com');
        });
        if($sent) dd("something wrong"); //var_dump + exit
        
        return response()->json(['message' => 'Request completed']);
        /* Mail::raw('Sending emails with Mailgun and Laravel is easy!', function($message)
        {
            $message->subject('Mailgun and Laravel are awesome!');
            $message->from('gmc.yanez@gmail.com', 'ruralshoponti');
            $message->to(env('MAIL_FROM_ADDRESS'), env('MAIL_FROM_NAME'));
        }); */
    }

}
