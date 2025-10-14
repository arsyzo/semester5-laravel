<?php

// namespace App\Models;

// use Illuminate\Database\Eloquent\Model;
// // use illuminate\Database\Eloquent\Factories\HasFactory;

// class product extends Model
// {
//     protected $fillable = ['name', 'price', 'description', 'category_id'];

//     public function category()
//     {
//         return $this->belongsTo(Category::class);
//     }

// } 

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class product extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_name', 
        'unit', 
        'type', 
        'information', 
        'qty', 
        'producer'
    ];

    // public function category()
    // {
    //     return $this->belongsTo(Category::class);
    // }
}


