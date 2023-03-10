<?php

namespace App\Models;

use App\Models\Order;
use App\Models\Category;
use App\Models\OrderDetail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    protected $fillable = [
        'name', 'slug', 'category_id', 'description', 'image', 'price', 'weight'
    ];

    public function category()
    {
        // return $this->belongsTo('App\Models\Category');
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    public function orderDetail()
    {
        return $this->hasMany(OrderDetail::class);
    }
}
