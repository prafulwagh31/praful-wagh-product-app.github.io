<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::get();

        return view("admin.product.index",compact('products'));
    }

    public function create()
    {
        return view('admin.product.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required','string','min:5','max:50'],
            'amount' => ['required','numeric'],
            'description' => ['required','string'],
            'image' => ['nullable','image','mimes:png,jpg,jpeg']
        ]);

        if ($request->has('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();

            $filename = time().'.'.$extension;
            $path = 'uploads/products/';
            $file->move($path,$filename);
        }

        Product::create([
            'name' => $request->name,
            'amount' => $request->amount,
            'description' => $request->description,
            'image' => $path.$filename
        ]);

        return redirect()->route('products.index')->with(['status' => 'success', 'message' => 'Products added successfully']);
    }

    public function edit(Product $product)
    {
        return view('admin.product.edit',compact('product'));
    }

    public function update(Request $request, int $id)
    {
        $request->validate([
            'name' => ['required','string','min:5','max:50'],
            'amount' => ['required','numeric'],
            'description' => ['required','string'],
            'image' => ['nullable','image','mimes:png,jpg,jpeg']
        ]);

        $product = Product::findOrFail($id);

        $imagePath = $product->image;

        if($request->has('image')){

            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();

            $filename = time().'.'.$extension;
            $path = 'uploads/products/';
            $file->move($path, $filename);

            if ($product->image && File::exists($product->image)) {
                File::delete($product->image);
            }

            $imagePath = $path . $filename;
        }

        $product->update([
            'name' => $request->name,
            'amount' => $request->amount,
            'description' => $request->description,
            'image' => $imagePath
        ]);

        return redirect()->route('products.index')->with(['status' => 'success', 'message' => 'Product updated successfully']);
    }

    public function show($id)
    {
        $product = Product::findOrFail($id);

        return view('frontend.home',compact('product'));
    }

    public function productList()
    {
        $products = Product::get();

        return view('frontend.product-list',compact('products'));
    }
}
