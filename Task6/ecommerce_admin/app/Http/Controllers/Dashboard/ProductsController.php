<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Services\Media;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;

class ProductsController extends Controller
{
    public const STATUS = ['Not Active', 'Active'];


    public const MAX_UPLOAD_SIZE = 2048;
    public const AVAIL_EX = ['jpeg', 'jpg', 'png'];
    public function index()
    {

        $products = DB::table('products')->get();
        return view('products.index', compact('products'));
    }
    public function create()
    {
        $brands = DB::table('brands')->select('id', 'name_ar', 'name_en')->get();
        $sub_categories = DB::table('sub_categories')->select('id', 'name_ar', 'name_en')->get();

        return view('products.createProduct', compact('sub_categories', 'brands'))->with('status', self::STATUS);
    }


    public function store(StoreProductRequest $request)
    {
        
                // The blog post is valid...
                // dd('Done');

        $values = $request->validated();
        $values['image'] = Media::upload($request->file('image'), 'products');
        DB::table('products')->insert($values);
        return $this->redirectRequest($request, 'Product Created Succesfully');

                // dd($values);

    }

    public function edit($id)
    {

        $products = DB::table('products')->where('id', '=', $id)->first();
        $brands = DB::table('brands')->select('id', 'name_ar', 'name_en')->get();
        $sub_categories = DB::table('sub_categories')->select('id', 'name_ar', 'name_en')->get();

        return view('products.editProduct', compact('products', 'sub_categories', 'brands'))->with('status', self::STATUS);
    }

    public function update(UpdateProductRequest $request, $id)
    {

        $values = $request->validated();
        if ($request->hasFile('image')) {
            $values['image'] =  Media::upload($request->file('image'), 'products');;
            $products = DB::table('products')->where('id', '=', $id)->first();
            Media::delete($products->image, 'products');
            // dd($values);
        }
        DB::table('products')->where('id', '=', $id)->update($values);
        return $this->redirectRequest($request, 'Product Updated Succesfully');
    }

    public function delete($id)
    {
        $products = DB::table('products')->where('id', '=', $id)->first();
        Media::delete($products->image, 'products');
        DB::table('products')->where('id', '=', $id)->delete();
        return redirect()->back()->with('success', 'Product Deleted Succesfully');
    }
}
