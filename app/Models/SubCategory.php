<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    use HasFactory;
    protected $fillable = [
        'category_id',
        'name',
       
       
    ];
    public function categories()
    {
        return $this->belongsTo(Category::class,'category_id');
    }
    public function items()
    {
        return $this->hasMany(Item::class, 'sub_category_id');
    }
}
