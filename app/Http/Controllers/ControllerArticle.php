<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Article;

class ControllerArticle extends Controller
{
     /** 
     *Display a listing of the ressource.
     *
     * @return \Illuminate\Http\Response

    */
    public function index(){
        $article= Article::all();
        return view('welcome',[
            'article' => $article
        ]);
    }

    /** 
     *create a new ressources
     *
     * @return \Illuminate\Http\Response

    */
    public function create()
    {
        return view('add');
    }

     /** 
     *store a newly article
     *
     * @return \Illuminate\Http\Response
     * @param \Illuminate\Http\Request $request


    */
    public function store(Request $request)
    {
        Article::create([
            'Title'=>$request ->title,
            'Description' => $request->description,
            'Author' => $request->author
        ]);
        return redirect("/");
    }

    /** 
     *store a newly article
     *
     * @return \Illuminate\Http\Response
     * @param int $id


    */
    public function destroy($id)
    {
        $article::find($id);
        $article->delete();
    

        return redirect("/");
    }

    /** 
     *edit an article
     *
     * @return \Illuminate\Http\Response
     * @param int $id


    */
    public function edit($id)
    {
        $article= Article::find($id);
        
        return view('edit',['article'=>$article]);
    }

    
    /** 
     *display a specified element
     *
     * @return \Illuminate\Http\Response
     * @param int $id


    */
    public function show($id)
    {
        $article= Article::find($id);
        
        return view('display',['article'=>$article]);
    }
    
    
    /** 
     *Update an article in BD
     *
     * @return \Illuminate\Http\Response
     * @param \Illuminate\Http\Request $request


    */
    public function update(Request $request,$id)
    {
        $article= Article::find($id);
            $article->Title = $request ->title;
            $article ->Description = $request->description;
            $article ->Author = $request->author;
        $article->save();

        return redirect("/");
    }
}
