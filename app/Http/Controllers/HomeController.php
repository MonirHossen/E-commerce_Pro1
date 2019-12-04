<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use App\ProductImage;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data['categories']                 = Category::active()->orderBy('name')->get();
        $data['featured_category_products'] = Category::with(['products' => function($query){
            return $query->with(['product_images' => function($query1){
                return $query1->get();
            }])->active()->limit(5);
        }])->active()->first();
        $data['new_arrivals']        = Product::with(['product_images','category'])->orderBy('id','desc')->active()->paginate(6);
        $data['featured_products']   = Product::with(['product_images','category'])->where('featured_products',1)->orderBy('id','desc')->active()->get();

        return view('front.home',$data);
    }
    public function category()
    {

    }

    public function product_details($id)
    {
        $product                    = Product::with('category')->findOrFail($id);
        $data['product_details']    = $product;
        $data['product_images']     = ProductImage::where('product_id',$id)->get();
        $data['leatest_products']   = Product::with('product_images')->orderBy('id','desc')->limit(4)->get();
        $data['related_products']   = Product::with('product_images')->where('category_id',$product->category_id)->orderBy('id','desc')->active()->get();

        return view('front.product_details',$data);
    }
}
