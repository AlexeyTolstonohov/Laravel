<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class SessionController extends Controller {

   public function accessSessionData(Request $request) {
      if($request->session()->has('my_name'))
         echo $request->session()->get('my_name');
      else
         echo 'No data in the session';
         dump(session()->all());
   }

   public function storeSessionData(Request $request) {
      $request->session()->put('my_name','Virat Gandhi');
      echo "Data has been added to session";
      dump(session()->all());
   }

   public function deleteSessionData(Request $request) {
      $request->session()->forget('my_name');
      echo "Data has been removed from session.";
   }
}


    /*public function show(Request $request){

        dump(session()->all());
    }

    public function put(Request $request){

        $request->session()->put('test', 'Test value');
        dump(session()->all());
    }

    public function get(Request $request){

        $request->session()->get('test');
        dump(session()->all());
    }

}*/


