<?php

namespace App\Http\Controllers;

use App\Article;
use App\Comment;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Http\Request;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;

class manage extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function AddArticle(Request $request){

        if ($request->isMethod('post')){
          $ar=new Article();
          $ar->title=$request->input('title');
          $ar->body=$request->input('body');
          $ar->user_id=Auth::user()->id;
          $ar->save();
          return redirect('view ');
        }
        return view('manage.AddArticle');
    }

    public function view(){
        $articles=Article::all();
        $ar=Array('articles'=>$articles);
        return view('manage.ShowArticle',$ar);

    }
    public function read(Request $request,$id){
        if ($request->isMethod('post')){
        $ar=new Comment();
        $ar->article_id=$id;
        $ar->body=$request->input('comment');
        $ar->save();

        }

        $articles=Article::find($id);
        $ar=Array('article'=>$articles);

        return view('manage.ReadArticle',$ar);
    }
}
