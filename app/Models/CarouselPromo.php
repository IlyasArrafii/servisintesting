<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarouselPromo extends Model
{
    use HasFactory;
    protected $table = "carousel_promo";
    protected $primaryKey = "id";
    protected $guarded = ['created_at', "updated_at"];
}
