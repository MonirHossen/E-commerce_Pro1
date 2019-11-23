<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderDetails extends Model
{
    protected $fillable =[
        'order_id',
        'category_id',
        'category_name',
        'product_id',
        'product_name',
        'quantity',
        'unit_price',
        'sub_total',
    ];
    public function order(){
        return $this->belongsTo(Order::class);
    }
}
