<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    const ACTIVE_STATUS = 'active';
    const INACTIVE_STATUS = 'inactive';
    protected $fillable = ['category_id','vendor_id','name','brand','description','unit_price','stock','status',];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function vendor()
    {
        return $this->belongsTo(Vendor::class);
    }
}
