<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Product;
use App\Models\Stock;

class ProductController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }



    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        return view('pages.products.index', ['products' => $products , 'title' => 'Liste des produits']);
        // compact('products' , 'title') est équivalent à ['products' => $products]
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $stocks = Stock::all();
        return view('pages.products.create' , ['title' => 'Créer un produit' , 'stocks' => $stocks]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request)
    {
        // $request->validate([
        //     'nom' => 'required|min:3|max:255',
        //     'description' => 'required|min:3|max:255',
        //     'image' => 'required|min:3|max:255',
        //     'stock_id' => 'required|exists:stocks,id'
        // ]);
        // $product = new Product();
        // $product->nom = $request->nom;
        // $product->description = $request->description;
        // $product->image = $request->image;
        // $product->stock_id = $request->stock_id;
        // $product->save();
        // return redirect()->route('products.index')->with('success', 'Produit créé avec succès !');
        $inputs = $request->validated();
        if($request->hasFile('image')) {
            $path = $request->file('image')->store('/images');
            $inputs['image'] = $path;
        }
        Product::create($inputs);
        return redirect()->route('products.index')->with('success', 'Produit créé avec succès !');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        $stocks = Stock::all();
        return view('pages.products.edit' , ['title' => 'Modifier un produit' , 'product' => $product , 'stocks' => $stocks]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        $inputs = $request->validated();
        $product->update($inputs);
        return redirect()->route('products.index')->with('success', 'Produit modifié avec succès !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return  redirect()->route('products.index')->with('success', 'Produit supprimé avec succès !');
    }
}
