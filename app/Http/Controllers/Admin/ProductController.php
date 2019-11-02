<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use App\Product;
use App\ProductImage;
use App\Vendor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['products'] = Product::orderBy('id','desc')->paginate(4);
        return view('admin.product.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['categories'] = Category::all();
        $data['vendors']    = Vendor::all();
       return view('admin.product.create',$data);
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
            'category_id'   => 'required',
            'vendor_id'     => 'required',
            'name'          => 'required',
            'brand'         => 'required',
            'description'   => 'required',
            'unit_price'    => 'required',
            'stock'         => 'required|int',
            'status'        => 'required|in:'.Product::ACTIVE_STATUS.','.Product::INACTIVE_STATUS,
            'image.*'       => 'mimes:jpeg,png',
        ]);
        DB::beginTransaction();
        try {
            $product = Product::create($request->all());

            if ($request->hasFile('image')) {
                foreach ($request->image as $file) {
                    $path = 'images/product';
                    $file_name = time() . rand('0000', '9999') . '.' . $file->getClientOriginalName();
                    $file->move($path, $file_name);

                    ProductImage::create([
                        'product_id' => $product->id,
                        'image' => $path . '/' . $file_name,
                    ]);
                }
            }
            DB::commit();
        }
        catch (\Exception $exception)
        {
            DB::rollBack();
            Log::error($exception->getMessage());
        }

        session()->flash('message','Product Created Successfully!');
        return redirect()->route('product.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $data['categories'] = Category::all();
        $data['vendors']    = Vendor::all();
        $data['product']    = $product;
        return view('admin.product.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'category_id'   => 'required',
            'vendor_id'     => 'required',
            'name'          => 'required',
            'brand'         => 'required',
            'description'   => 'required',
            'unit_price'    => 'required',
            'stock'         => 'required|int',
            'status'        => 'required|in:'.Product::ACTIVE_STATUS.','.Product::INACTIVE_STATUS,
        ]);
        DB::beginTransaction();
        try{
            $product->update($request->except('_token'));
            DB::commit();
        }
        catch (\Exception $exception)
        {
            DB::rollBack();
            Log::error($exception->getMessage());
        }

        session()->flash('message','Product Updated Successfully!');
        return redirect()->route('product.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
            $images = ProductImage::where('product_id',$product->id)->get();
            foreach ($images as $image)
            {
                if (file_exists($image->image))
                {
                    unlink($image->image);
                }
                $image->delete();
            }

            $product->delete();
            session()->flash('message','Product Updated Successfully!');
            return back();
    }

    //// image handeling methods//

    public function images($product_id)
    {
        $data['product_id'] = $product_id;
        $data['images'] = ProductImage::where('product_id',$product_id)->get();
        return view('admin.product.images',$data);
    }

    public function images_create($product_id)
    {
        $data['product_id'] = $product_id;
        return view('admin.product.images_create',$data);
    }

    public function images_store(Request $request,$product_id)
    {
        $request->validate([
            'image.*'   => 'required|mimes:jpeg,png,jpg',
        ]);

        if ($request->hasFile('image'))
        {
            foreach ($request->image as $file)
            {
                $file->move('images/product/',time().$file->getClientOriginalName());
                $data['image'] = 'images/product/'.time().$file->getClientOriginalName();
                $data['product_id'] = $product_id;
                ProductImage::create($data);
            }
        }
        session()->flash('message','Product Images Stored Successfully!');
        return redirect()->route('product.images',$product_id);
    }

    public function image_update(Request $request,$image_id)
    {
        $request->validate([
            'image' => 'required',
        ]);
        if ($request->hasFile('image'))
        {
            $old_image = ProductImage::findOrFail($image_id);
            if (file_exists($old_image->image))
            {
                unlink($old_image->image);
            }

            $file       = $request->file('image');
            $path       = 'images/product/';
            $file_name  = time().rand('0000','9999').'.'.$file->getClientOriginalName();
            $file->move($path,$file_name);
            $data['image'] = $path.$file_name;

            $old_image->update($data);
            session()->flash('message','Product Image Updated Successfully!');
            return back();
        }
    }

    public function image_delete($image_id)
    {
        $old_image = ProductImage::findOrFail($image_id);
        if (file_exists($old_image->image))
        {
            unlink($old_image->image);
        }
        $old_image->delete();
        session()->flash('message','Product Image Deleted Successfully!');
        return back();
    }

}
