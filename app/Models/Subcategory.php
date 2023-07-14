<?php

namespace App\Models;

use Illuminate\Console\Application;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'processor',
        'memory',
        'storage_drive',
        'motherboard',
        'incoming_id'

    ];
    public function incoming()
    {
        return $this->belongsTo(Incoming::class);
    }
}
