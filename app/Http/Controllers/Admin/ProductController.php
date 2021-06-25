<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Support\Str;
use App\Http\Requests\Admin\CreateProductRequest;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::select(['id', 'title', 'photo', 'price', 'quantity', 'sale_off'])
        ->orderBy('id', 'desc')
        ->paginate(config('constants.admin_perpage'));

        return view('admin.products.index', compact('products'));
    }

    public function create()
    {
        return view('admin.products.create');
    }

    public function store(CreateProductRequest $request)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->title);
        $data['user_id'] = 1;

        if ($request->hasFile('photo')) {
            $path = $request->photo->store('images');
            $data['photo'] = $path;
        }

        Product::create($data);

        return redirect(route('admin.product.list'))
        ->with('success', 'The product is created success!');
    }

    public function show($id)
    {
        //
    }

    public function edit(Request $request, $id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy(Request $request)
    {
        $product = Product::find($request->item);

        if ($product)
        {
            $product->delete();
            return redirect()->route('admin.product.list')->with('success', 'Delete Success!');
        }

        return redirect()->route('admin.product.list')->withErrors(['error', 'Error When Deleting!']);
    }
}
