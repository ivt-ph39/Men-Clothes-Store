<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\ProductDetail;
use DB;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function __construct()
    {
        $listSize = Product::LIST_SIZE;
        view()->share([
            'listSize' => $listSize
        ]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::orderBy('id', 'asc')->paginate(8);
        return view('backend.product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('backend.product.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product_data = $request->only('category_id', 'name', 'price', 'size', 'description', 'quantities', 'image');
        $product_detail = $request->only('detail');
        if ($request->hasFile('image')) {
            $name = rand(1,1000).$request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path('\img'), $name);
            $product_data['image'] = '/img/'.$name;
        }
        $productID = Product::create($product_data)->id; //Lưu data vào bảng product và lấy product id
        $product_detail['product_id'] = $productID; //Gán product id cho product_id ở bảng product_detail
        ProductDetail::create($product_detail); //Lưu data vào bảng product_detail
        return redirect()->route('admin-product-index');
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

        $product = DB::table('products')->where('products.id', '=', $id)->join('product_details', 'products.id', '=', 'product_details.product_id')->select('products.*', 'product_details.product_id', 'product_details.detail')->get();
        $categories = Category::all();
        return view('backend.product.edit', compact('product', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product_data = Product::find($id);
        $product_data->category_id = $request->category_id;
        $product_data->name = $request->name;
        $product_data->price = $request->price;
        $product_data->size = $request->size;
        $product_data->description = $request->description;
        $product_data->quantities = $request->quantities;
        if ($request->hasFile('image')) {
            $name = rand(1,1000).$request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path('\img'), $name);
            $product_data->image = '/img/'.$name;
        }
        $product_data->save();
        DB::table('product_details')->where('product_id', '=', $id)->update(['detail' => $request->detail]);
        return redirect()->route('admin-product-index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::find($id)->delete();
        return redirect()->route('admin-product-index');
    }
}
