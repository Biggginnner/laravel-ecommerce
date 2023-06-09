<?php

namespace App\Models;

use App\Models\User;
use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Order extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function products():BelongsToMany
    {

        return $this->belongsToMany(Product::class)
        ->withPivot('total_quantity','total_price');
    }

    public function user(){

        return $this->belongsTo(User::class);
    }
}
