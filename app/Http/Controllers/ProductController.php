<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductImages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function list(Request $request){
        if(isset($request->search)){
            $products  = Product::where('name', 'LIKE', '%' . $request->search . '%')->paginate(30);
        }else{
            $products  = Product::paginate(30);
        }
        
        return view('product.list', [
            'products' => $products
        ]);
    }

    public function listAdmin(){
        $product = Product::paginate(15);
        return view('product.list-admin', [
            'products' => $product
        ]);
    }

    public function create() {
        return view('product.create', [
            'category' => Category::all(),
            'brands' => Brand::all(),
        ]);
    }

    public function store(Request $request) {
        $validation = $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'old_price' => 'nullable|numeric|min:0',
            'stock' => 'required|integer|min:0',
            'description' => 'required|string',
            'body' => 'required|string',
            'category_id' => 'required|exists:categories,id',
            'brand_id' => 'required|exists:brands,id',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $data = array_merge($validation, [
            'user_id' => auth()->user()->id
        ]);
        $product = Product::create($data);
        foreach ($request->file('images') as $file) {
            $path = $file->store('public/product');
            $url = Storage::url($path);
            ProductImages::create([
                "image" => $url,
                "product" => $product->id
            ]);
        }

        return redirect()->route('product.list')->with(['message' => 'Product created successfully.']);
    }

    public function product(Product $product)
{
    return view('product.product', [
        'product' => $product
    ]);
}

    public function update(Product $product)
    {

        return view('product.update', [
            'category' => Category::all(),
            'product' => $product,
            'brands' => Brand::all(),

        ]);
    }
    public function updateStore(Request $request, Product $product)
    {
        $validation = $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'old_price' => 'nullable|numeric|min:0',
            'stock' => 'required|integer|min:0',
            'description' => 'required|string',
            'body' => 'required|string',
            'category_id' => 'required|exists:categories,id',
            'brand_id' => 'required|exists:brands,id',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048' // validate each image
        ]);

        $product->update($validation);
        // Update images
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $file) {
                $path = $file->store('public/product');
                $url = Storage::url($path);
                ProductImages::create([
                    "image" => $url,
                    "product" => $product->id
                ]);
            }
        }

        return redirect()->route('product.list')->with(['message' => 'Product updated successfully.']);
    }



    public function delete(Product $product)
    {
        $product->delete();
        return redirect()->route('product.list')->with(['message' => 'Product created successfully.']);
    }
}
