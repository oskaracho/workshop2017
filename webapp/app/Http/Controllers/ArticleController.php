<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Http\Controllers;

use illuminate\Support\Facades\Redirect;
use App\Http\Requests\ArticleFormRequest;
use Illuminate\Auth\Middleware\Authenticate;
use Illuminate\Support\Facades\View;

use DB;

class ArticleController extends Controller
{
    public function _construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {

        if ($request)
        {
            /*$query=trim($request->get('searchText'));
            $providers = DB::table('providers')->get();*/
            $query=trim($request->searchText);
            $articles = DB::table('articles')->where('name','LIKE','%'.$query.'%')
                ->orderBy('id','desc')
                ->paginate(2);

            return view ('article.index',["articles" =>$articles ,"searchText"=>$query]);

        }

    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //
        return view("article.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store ($request)
    {
        //
        $article = new Article;
        $article -> code = $request -> code;
        $article -> name = $request -> name;
        $article -> stock = $request -> stock;
        $article -> state = $request -> state;
        $article -> sale_price = $request -> sale_price;
        $article -> save();
        return redirect('article');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {


        return view ("article.show", ["article"=> Article::findOrFail($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        return view ("article.edit", ["article"=> Article::findOrFail($id)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update( ArticleFormRequest $request, $id)
    {
        //
        $article = Article::findOrFail($id);
        $article -> code = $request -> code;
        $article -> name = $request -> name;
        $article -> stock = $request -> stock;
        $article -> state = $request -> state;
        $article -> sale_price = $request -> sale_price;
        $article -> update();
        return redirect('article');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $article =Article::find($id);
        $article -> delete();
        return redirect('article');
    }
}
