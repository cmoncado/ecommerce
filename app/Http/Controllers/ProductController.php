<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products;
use App\Http\Resources\ProductsCollection;

class ProductController extends Controller
{
      public function __construct(){
        $this->middleware('auth',['except' => ['index','show']]);

      }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //Muestra la colección del recurso
        $products = Products::paginate(15);
        if($request->wantsJson())
        {
          return new ProductsCollection($products);

        }
        return view('products.index',['products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Mostramos un formulario para crear productos
        $product = new Products;
        return view('products.create',['product' => $product]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $options = [
           'title' => $request->title,
            'description' => $request->description,
            'price' => $request->price

      ];

      if(Products::create($options)) {
           return redirect('/productos');


        } else {
            return redirect(products.create);

      }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // Muestra unicamente un recurso
        $product = Products::find($id);

        return view('products.show',['product' => $product]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //Muestra un formulario para editar un recurso
        $product = Products::find($id);
        return view('products.edit',['product' => $product]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Actualiza un recurso
          $product = Products::find($id);
          $product->title = $request->title;
          $product->description = $request->description;
          $product->price = $request->price;

          if ($product->save()) {
             return redirect('/');
          } else {
              return view('products.edit',['product' => $product]);

          }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Remueve el recurso del storage
        $products = Products::destroy($id);

        return redirect('/productos');
    }
}
