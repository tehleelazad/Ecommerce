<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table='orders';
    protected $fillable = ['user_id', 'product_id', 'quantity', 'address_id'];
    
    
    public function orderupdates()
    {
        return $this->hasMany(OrderUpdate::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function shipment()
    {
        return $this->belongsTo(Shipment::class, 'address_id');
    }
   

}
