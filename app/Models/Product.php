<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    public function getUser(){
        return $this->belongsTo('\App\Models\Product', 'owner_email', 'email');
    }

    public function allReviews(){
        return $this->hasMany('\App\Models\Review', 'product_name', 'name');
    }
}
