<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $table = 'reviews';

    public function getReviewProduct(){
        return $this->belongsTo('\App\Models\Product', 'product_name', 'name');
    }

    public function getReviewUser(){
        return $this->belongsTo('\App\Models\User', 'lender_email', 'email');
    }
}
