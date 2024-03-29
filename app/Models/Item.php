<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;
    protected $fillable = [
        'sub_category_id',
        'name',
       
       
    ];
    public function subcategories()
    {
        return $this->belongsTo(SubCategory::class ,'sub_category_id');
    }


}
