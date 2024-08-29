<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
      use HasFactory;

    protected $fillable = ['name', 'image', 'description','quantity', 'price', 'category_id'];
        
  
      public function scopeNewProducts($query, $limit)
      {
          return $query->orderBy('id', 'desc')->limit($limit)->with(['category']);
      }

      public function scopeBestSellerProducts($query, $limit)
      {
          return $query->where('sold', '>', 0)->orderBy('id', 'desc')->limit($limit)->with(['category']);
      }   

      public function scopeInStockProducts($query, $limit)
      {
          return $query->where('quantity', '>', 0)->orderBy('id', 'desc')->limit($limit)->with(['category']);
      } 
  
      public function category(){
        return $this->belongsTo(Category::class);
      }
}
