<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FeatureController extends Controller
{
    public function getAll(){
        $features=DB::table("feature")->get();
        return response()->json($features);
    }
    public function getFirstByCount($id){
        $features=DB::table("feature")->take($id)->get();
        return response()->json($features);
    }
}
