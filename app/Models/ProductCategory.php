<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    use HasFactory;
    protected $table = 'product_category';
    public $timestamps = false;
    protected $fillable = ['productCategoryName'];
    protected $primaryKey = 'productCatId';
}
