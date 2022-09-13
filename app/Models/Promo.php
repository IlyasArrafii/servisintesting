<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promo extends Model
{
    protected $table = "promo";
    protected $primaryKey = "id";
    protected $guarded = ['created_at', "updated_at"];
}