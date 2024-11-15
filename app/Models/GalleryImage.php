<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; 


class GalleryImage extends Model
{
    use HasFactory,SoftDeletes;

    protected $guarded = [];

    // Define the relationship with Gallery
    public function gallery()
    {
        return $this->belongsTo(Gallery::class);
    }
}