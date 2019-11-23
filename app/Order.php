<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'client_id',
        'invoice_id',
        'total_amount',
        'payment_type',
        'payment_status',
        'status',
        'processed_by',
    ];
//   PT = PAYMENT TYPE
    const PT_OFFLINE = 'offline';
    const PT_ONLINE = 'online';

//   PS = PAYMENT STATUS
    const PT_PAID = 'paid';
    const PT_UNPAID = 'unpaid';

    const STATUS_PENDING    = 'pending';
    const STATUS_PROCESSING = 'processing';
    const STATUS_DELIVERED  = 'delivered';
    const STATUS_DECLINED   = 'declined';

    public function orderDetails(){
       return $this->hasMany(OrderDetails::class);
    }
    public function client(){
       return $this->belongsTo(Client::class);
    }
}
