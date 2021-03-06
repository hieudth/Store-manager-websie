<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::paginate();

        return view('admin.category.index', compact('categories'));
    }

    public function destroy(Request $request)
    {
        $category = Category::find($request->item);

        if ($category)
        {
            DB::beginTransaction();
            try{
                $product = Product::where('category_id', $request->item)->delete();
                $category->delete();

                DB::commit();
                return redirect()->route('admin.category.list')->with('success', 'Delete Success!');
            }catch (\Throwable $e)
            {
                DB::rollBack();
                Log::debug($e->getMessage() . $e->__toString());
                abort(404);
            }

        }

        return redirect()->route('admin.category.list')->withErrors(['error', 'Error When Deleting!']);
    }
}
