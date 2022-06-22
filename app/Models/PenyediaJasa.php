<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PenyediaJasa extends Model
{
    protected $table = "penyedia_jasa";
    protected $primaryKey = "id_penyediajasa";
    protected $guarded = ['created_at', "updated_at"];
}
