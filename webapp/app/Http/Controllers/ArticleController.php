<?php

namespace App\Http\Controllers;

use App\Art_ven;
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
                ->paginate(5);
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

            $product = DB::table('products')
                ->where('code', '=', $request->codePro)
                ->get();


        return view ("article.create",["product"=>$product]);
    }


    public function store (ArticleFormRequest $request)
    {
        //
        $article = new Article;
        $article -> name = $request -> name;
        $article -> code = $request -> code;
        $article -> product_id = $request -> product_id;
        $article -> warehouse_id = $request -> warehouse_id;
        $article -> stock = $request -> stock;
        $article -> state = $request -> state;
        $article -> sale_price = $request -> sale_price;
        $article -> stock_start = $request -> stock;
        $article -> status = 1;
        $article -> save();
        $art = new Art_ven;
        $art -> idarticle = $article->id;
        $art -> code = $request -> code;
        $art -> stock_start = $request -> stock;
        $art -> sale_price = $request -> sale_price;
        $art -> status = 1;
        $art -> save();
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
        $article -> name = $request -> name;
        $article -> code = $request -> code;
        $article -> product_id = $request -> product_id;
        $article -> warehouse_id = $request -> warehouse_id;
        $article -> stock = $request -> stock;
        $article -> state = $request -> state;
        $article -> sale_price = $request -> sale_price;
        $article -> warehouse_id = $request -> warehouse;
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
