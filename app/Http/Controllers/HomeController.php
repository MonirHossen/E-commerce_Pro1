<?php

namespace App\Http\Controllers;

use App\Category;
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
        $data['categories'] = Category::active()->orderBy('name')->get();
        $data['featured_category_products'] = Category::with(['products' => function($query){
            return $query->with(['product_images' => function($query1){
                return $query1->get();
            }])->active()->limit(5);
        }])->active()->first();

        return view('front.home',$data);
    }
    public function category()
    {

    }
}
