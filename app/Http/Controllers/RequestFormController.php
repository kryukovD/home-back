<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RequestFormController extends Controller
{
    public function insertForm(Request $request){
        DB::table('request')->insert([
            'name'=>$request['name'],
            'email'=>$request['email'],
            'message'=>$request['message']
        ]);
        return response()->json(["message"=>$request['name'].", мы пришлем ответ на почту ".$request['email']."!"]);
    }
}
