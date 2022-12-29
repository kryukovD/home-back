<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Article;

class ArticlesController extends Controller
{
    public function getArticles(){
        $articles=Article::get();
        return response()->json($articles);
    }
    public function getById($id){
        $article=Article::where("id","=",$id)->first();
        return response()->json($article);
    }

}
