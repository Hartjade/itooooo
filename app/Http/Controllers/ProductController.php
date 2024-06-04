<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        return view('partials.products', ['products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "productName" => "required",
            "productDescription" => "required",
            "productPrice" => "nullable|numeric|min:0",
            "productQuantity" => "nullable|integer|min:0",
            "productImage" => "nullable|image|mimes:jpeg,png,jpg|max:5048",
        ]);

        $imgName = time() . '-' . $request->productName . '.' . $request->productImage->extension();

        $request->productImage->move(public_path('images'), $imgName);

        $product = new Product();
        $product->name = $request->input('productName');
        $product->description = $request->input('productDescription');
        $product->price = $request->input('productPrice');
        $product->quantity = $request->input('productQuantity');
        $product->image_url = $imgName;
        $product->user_id = Auth::id();


        $product->save();
        return redirect()->back()->with('success', 'Product added successfully.');
    }


    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        return view('partials.productList', ["user" => $request->user(), "products" => Product::all()]);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product = Product::findOrFail($id);

        return view('partials.adminEdit', ['user' => Auth::user(), 'product' => $product]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        
    $product = Product::findOrFail($id);

    if ($request->hasFile('productImage')) { 
       
    $imgName = time() . '-' . $request->productName . '.' . $request->productImage->extension();

    $request->productImage->move(public_path('images'), $imgName);
    $product->image_url = $imgName;
    }

    $product->name = $request->input('productName');
    $product->description = $request->input('productDescription');
    $product->price = $request->input('productPrice');
    $product->quantity = $request->input('productQuantity');
    $product->user_id = Auth::id();

    $product->save();
    return redirect("/dashboard");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::find($id);

        if ($product) {
            $product->delete();

            return redirect()->back();
        } else {
            return redirect()->back();
        }
    }
}
