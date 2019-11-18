<?php

namespace App\Http\Controllers;

use App\Order;
use App\OrderDetails;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CheckoutController extends Controller
{
   public function cart()
   {
       return view('front.cart');
   }

   public function checkout(Request $request)
   {
       DB::beginTransaction();
       try{
         $cart = $request->data;
         $order = Order::create([
             'invoice_id'        =>  'INV-'.time(),
             'total_amount'      =>  0,
             'payment_type'      => Order::PT_OFFLINE,
             'payment_status'    => Order::PT_UNPAID,
             'status'            => Order::STATUS_PENDING,
         ]);


         $total_amount = 0;
         foreach ($cart as $item)
         {
             $product = Product::with('category')->where('id',$item['productId'])->first();
             $order_details['order_id']      = $order->id;
             $order_details['category_id']   = $product->category->id;
             $order_details['category_name'] = $product->category->name;
             $order_details['product_id']    = $product->id;
             $order_details['product_name']  = $product->name;
             $order_details['quantity']      = $item['productQuantity'];
             $order_details['unit_price']    = $product->unit_price;
             $order_details['sub_total']     = $product->unit_price * $item['productQuantity'];
             OrderDetails::create($order_details);
            $total_amount   += $order_details['sub_total'];
            $product->stock  = $product->stock - $item['productQuantity'];
            $product->save();
         }
         $order->total_amount = $total_amount;
         $order->save();
        DB::commit();
        return json_encode(['response' => true]);
       }
       catch (\Exception $exception)
       {
           DB::rollBack();
           return json_encode(['response' => false]);
       }
   }

}
