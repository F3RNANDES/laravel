<?php

namespace App\Http\Controllers;

use App\Http\Controllers;
use App\Models\Produto;

class NameController extends Controller
{
    public function index()
    {
        $produtos = Produto::all();
       
        return view('produtos.index', ['produtos' => $produtos]);

    }
    public function create()
    {
        return view('products.create');
    }
    public function store(ProductRequest $request)
    {
        $product = new Produto();
        $product->name = $request->name;
        $product->description = $request->description;
        $product->quantity =$request->quantity;
        $product->price = $request->price;
        $product->save();
        return redirect()->route('products.index')->with('message', 'Product created sucessfully!');

    }
    public function show($id)
    {
        //
    }
    public function edit($id)
    {
        $product = Produto::find0rFail($id);
        return view('products.edit',compat('product'));
    }
    public function update(ProductRequest $request, $id)
    {
        $product = Produto::find0rFail($id);
        $product->name =$name;
        $product->description=$description;
        $product->quantity = $request->quantity;
        $product->price = $request->price;
        $product->save();
        return redirect()->route('products.index')->with('message', 'Product updated successfully!');
    }

    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect()->route('products.index')->with('alert-success','Product hasbeen deleted!');
    }
}