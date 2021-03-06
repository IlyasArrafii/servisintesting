<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemesanan extends Model
{
    protected $table = "pemesanan";
    protected $guarded = ['created_at', "updated_at"];

    public function Layanan()
    {
        return $this->belongsTo(Layanan::class, 'kode_layanan', 'kode_layanan');
    }
}
