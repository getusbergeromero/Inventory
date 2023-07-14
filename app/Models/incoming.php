<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class incoming extends Model
{
    use HasFactory;

    protected $fillable = [
        'item_category',
        'item_sub_category',
        'description',
        'serial_no',
        'category_id'
    ];
    public function subcategories()
    {
        return $this->hasMany(Subcategory::class, 'incoming_id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
}
