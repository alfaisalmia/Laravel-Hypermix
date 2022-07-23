<?php

namespace App\Http\Controllers;

use App\Models\ProductCategory;
use Illuminate\Http\Request;

class ProductCategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
    }
    public function index()
    {
        $proCategories = ProductCategory::orderBy('productCatId', 'DESC')->get();
        return view('product-admin.product-categories', compact('proCategories'));
    }
    public function create(){
        return view('product-admin.product-category-create');
    }
    public function store(Request $request)
    {
          $product_category = new ProductCategory();
          $product_category->productCategoryName = $request->productCategoryName;
          $product_category->save();
          return redirect()->route('product-categories')->with('create','Category saved successfully');  
    }
    public function edit($id)
    {
        //$product_category = ProductCategory::find($id);
        $product_category = ProductCategory::where('productCatId',$id)->first();

        return view('product-admin.product-category-edit', compact('product_category'));
    }
    public function update(Request $request, ProductCategory $product_category, $id)
    {
   
        $product_category = ProductCategory::where('productCatId',$id)->first();
        $product_category->update([
            $product_category->productCategoryName = $request->productCategoryName,
        ]);
        return redirect('/product-categories')->with('update', 'Product category updated successfully.');
    }


}
