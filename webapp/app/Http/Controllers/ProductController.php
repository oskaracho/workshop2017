<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductFormRequest;
use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return view('product.index');
        $productos = Product::latest()->paginate(5);
        return view('product.index',compact('productos'))
            ->with('i',(request()->input('page',1)-1)*5);
    }

    public function indexDataTable()
    {
        $productList = Product::all();
        return response()->json($productList);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

        return view ('product.create');


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductFormRequest $request)
    {
        //validate fields
        $product = new Product;
        $product->product_name = $request->product_name;
        $product->product_description = $request->product_description;
        $product->product_date_up = date("Y-m-d");
        $product->product_date_down = date("Y-m-d");
        $product->created_at = date("Y-m-d");
        $product->updated_at = date("Y-m-d");
        $product->code = $request->code;

        $product->save();

        // Warehouses::create($request->all());
        return redirect()->route('product.index')
            ->with('success','"'.$request->product_name.'"'.' FUE REGISTRADO CORRECTAMENTE');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product=Product::find($id);
        return view('product.edit',compact('product'));    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductFormRequest $request, $id)
    {
        Product::find($id)->update($request->all());
        return redirect()->route('product.index')
            ->with('success','"'.$request->product_name.'"'.' FUE EDITADO CORRECTAMENTE');    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product=Product::find($id);
        $product->delete();
        return redirect()->route('product.index')->with('success',$product->product_name.' FUE ELIMINADO');
    }

}
