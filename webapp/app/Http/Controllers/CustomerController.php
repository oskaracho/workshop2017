<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use App\Http\Controllers;

use illuminate\Support\Facades\Redirect;
use App\Http\Requests\ArticleFormRequest;
use Illuminate\Auth\Middleware\Authenticate;
use Illuminate\Support\Facades\View;

use DB;


class CustomerController extends Controller
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
            $customers = DB::table('customers')->get();*/
            $query=trim($request->searchText);
            $customers = DB::table('customers')->where('name','LIKE','%'.$query.'%')
                ->orderBy('id','desc')
                ->paginate(2);

            return view ('customer.index',["customers" =>$customers ,"searchText"=>$query]);

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
        return view("customer.create");
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
        $customer = new Customer;
        $customer -> name = $request -> name;
        $customer -> document_type = $request -> document_type;
        $customer-> document_num = $request -> document_num;
        $customer-> address = $request -> address;
        $customer-> phone = $request -> phone;
        $customer -> emaill = $request -> emaill;
        $customer -> save();
        return redirect('customer');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {


        return view ("customer.show", ["customer"=> Customer::findOrFail($id)]);
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
        return view ("customer.edit", ["customer"=> Customer::findOrFail($id)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update( $request, $id)
    {
        //
        $customer = Customer::findOrFail($id);
        $customer -> name = $request -> name;
        $customer -> document_type = $request -> document_type;
        $customer-> document_num = $request -> document_num;
        $customer-> address = $request -> address;
        $customer-> phone = $request -> phone;
        $customer -> emaill = $request -> emaill;
        $customer -> update();
        return redirect('customer');

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
        $customer =Customer::find($id);
        $customer -> delete();
        return redirect('customer');
    }
}
