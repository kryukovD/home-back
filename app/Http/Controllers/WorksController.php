<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Work;

class WorksController extends Controller
{
    public function getLastWorks(){
       $works=Work::orderBy("date","desc")->limit(4)->get();
       return response()->json($works);
    }
    public function getAllWorks(){
        $works=Work::get();
        return response()->json($works);
    }
}
