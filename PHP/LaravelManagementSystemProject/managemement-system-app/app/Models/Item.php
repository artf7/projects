<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $table = 'items'; // Make sure this corresponds to your table name
    
    protected $fillable = [
        'category_id', // Include the category_id field
        'title',
        'description',
        'price',
        'quantity',
        'sku',
        'picture'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
