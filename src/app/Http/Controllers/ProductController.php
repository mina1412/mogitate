<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; //
use App\Models\Product;
use App\Http\Requests\UpdateProductRequest;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $keyword = trim($request->input('keyword'));
        $sort = $request->input('sort');

        $query = Product::query();

        if (!empty($keyword)){
            $query->where('name', 'LIKE', "%{$keyword}%");
        } 

        if ($sort === 'asc'){
            $query->orderBy('price', 'asc');
        } elseif ($sort === 'desc'){
            $query->orderBy('price' , 'desc');
        }

        $products = $query->paginate(6);

        $products->appends([ 'keyword' => $keyword, 'sort' => $sort]);

        return view('products.index', compact('products', 'keyword', 'sort'));
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('products.edit', compact('product'));
    }

    public function update(UpdateProductRequest $request, $id)
    {
        $product = Product::findOrFAil($id);
        $data = $request->validated();

        if ($request->hasFile('image')){
            $image = $request->file('image');
            $path = $image->store('public/images');
            $data['image_path'] = basename($path);
        }
        $product->update($data);
        return redirect()->route('products.index')->with('success', '商品情報を更新しました！');
    }

    public function destroy($id)
    {
        $product = Product::FindOrFail($id);
        $product->delete();

        return redirect()->route('products.index')->with('success', '商品を削除しました。');
    }

    public function show($id)
    {
        $product =Product::findOrFail($id);
        return view('products.show', compact('product'));
    }
}

