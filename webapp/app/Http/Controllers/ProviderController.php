<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Provider;
use illuminate\Support\Facades\Redirect;
use App\Http\Requests\ProviderFormRequest;
use Illuminate\Auth\Middleware\Authenticate;
use Illuminate\Support\Facades\View;

use DB;

class ProviderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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
            $providers = DB::table('providers')->where('name','LIKE','%'.$query.'%')
                ->whereNull('deleted_at')
                ->orderBy('id','desc')
                ->paginate(2);

            return view ('provider.index',["providers" =>$providers ,"searchText"=>$query]);

        }

    }
    public function indexDataTable()
    {
        $providerList = Provider::all();
        dd($providerList);
      //  return database()->json($providerList);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //
        $provider = new Provider;
        return View::make("provider.create")->with('provider', $provider);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProviderFormRequest $request)
    {
        //
        $provider = new Provider;
        $provider -> name = $request -> name;
        $provider -> telefono = $request -> telefono;
        $provider -> direccion = $request -> direccion;
        $provider -> description = $request ->description;
        $provider -> save();
        return redirect('provider');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {


        return view ("provider.show", ["provider"=> Provider::findOrFail($id)]);
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
        return view ("provider.edit", ["provider"=> Provider::findOrFail($id)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProviderFormRequest $request, $id)
    {
        //
        $provider = Provider::findOrFail($id);
        $provider -> name = $request ->name;
        $provider -> telefono = $request -> telefono ;
        $provider -> direccion = $request -> direccion;
        $provider -> description = $request -> description;
        $provider -> update();
        return redirect('provider');

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
        $provider =Provider::find($id);
        $provider -> delete();
        return redirect('provider');
    }
}

