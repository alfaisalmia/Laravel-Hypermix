<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use App\Models\ProductAvaiability;
use App\Models\ProductCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductAdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
    }
    public function index()
    {
        $productsAll = Product::orderBy('id', 'DESC')->get();
        return view('product-admin.index', compact('productsAll'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $product_category = ProductCategory::all();

        return view('product-admin.create', compact('product_category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'product_title' => 'required',
            'current_price' => 'required',
            'product_image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'product_description' => 'required',
        ]);
        //for image 
        $uploadPath = public_path('uploads/products');
        $fileName = $request->file('product_image')->getClientOriginalExtension();
        $newFileName = time() . '.' . $fileName;
        $post_image = $newFileName;
        $request->product_image->move($uploadPath, $newFileName);

        $prod = new Product();
        $prod->product_title = $request->product_title;
        $prod->brand_name = $request->brand_name;
        $prod->regular_price = $request->regular_price;
        $prod->current_price = $request->current_price;
        $prod->product_code = $request->product_code;
        $prod->product_category = $request->product_availablity;
        $prod->product_image = $post_image;
        $prod->product_description = $request->product_description;
        $prod->save();
        return redirect()->route('product.index')->with('create', 'Product add Successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        $product_category  = ProductCategory::all();
        return view('product-admin.edit', compact('product', 'product_category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $pro, $id)
    {

        $request->validate([
            'product_title' => 'required',
            'current_price' => 'required',
            'product_description' => 'required',
        ]);

        $pro = Product::find($id);

        //FOR PICTURE UPDATE
        global $old_image;
        $old_image = public_path('/upoads/products/' . $pro->product_image);
        if ($request->hasFile('product_image')) {
            if (file_exists(public_path('uploads/products/' . $pro->product_image))) {
                unlink(public_path('uploads/products/' . $pro->product_image));
            }
            $image = $request->file('product_image');
            $image_name = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/uploads/products');
            $image->move($destinationPath, $image_name);
            $pro->product_image =  $image_name;
        } else {
            $pro->product_image =  $pro->product_image;
        }

        $pro->update([
            $pro->product_title = $request->product_title,
            $pro->brand_name = $request->brand_name,
            $pro->regular_price = $request->regular_price,
            $pro->current_price = $request->current_price,
            $pro->product_code = $request->product_code,
            $pro->product_category = $request->product_availablity,
            $pro->product_description = $request->product_description,

        ]);

        return redirect()->route('product.index')->with('update', 'Product updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product  $prd, $id)
    {
        $prd = Product::find($id);
        unlink(public_path('uploads/products/' . $prd->product_image));
        $prd->delete();
        return redirect()->route('product.index')->with('delete', 'Product deleted successfully');
    }

    public function onlineOrder()
    {
        $orders =  DB::table('orders')
            ->join('products', 'orders.product_id', '=', 'products.id')
            ->join('users', 'orders.user_id', '=', 'users.id')
            ->select('products.*', 'orders.*', 'users.first_name', 'users.last_name', 'users.email')
            ->orderBy('orders.id', 'desc')->paginate(15);
        return view('onlineorder.index', compact('orders'));
    }
    public function delivery(Order $order, $id)
    {
        $order = Order::find($id);
        $order->update([
            $order->status = 'Delivered',
            $order->payment_status = 'Success',
        ]);
        return redirect()->route('onlineOrder')->with('update', 'Order updated successfully.');
    }

    public function calender(){
        return view('calender.index');
    }
}
