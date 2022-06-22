<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class generateKode extends Model
{
    public function KodeLayanan()
    {
        $layanan = Layanan::orderBy('kode_layanan', 'desc')->first();

        if (empty($layanan)) {
            $format = "L0001";
        } else {
            $kode = $layanan->kode_layanan;
            $num = substr($kode, 1, 4);
            $add = (int) $num + 1;
            if (strlen($add) == 1) {
                $format = "L000" . $add;
            } else if (strlen($add) == 2) {
                $format = "L00" . $add;
            } else if (strlen($add) == 3) {
                $format = "L0" . $add;
            } else {
                $format = "L" . $add;
            }
        }
        return $format;
    }

    public function KodePemesanan()
    {
        $pemesanan = Pemesanan::orderBy('kode_pemesanan', 'desc')->first();

        if (empty($pemesanan)) {
            $format = "P0001";
        } else {
            $kode = $pemesanan->kode_pemesanan;
            $num = substr($kode, 21, 4);
            $add = (int) $num + 1;
            if (strlen($add) == 1) {
                $format = "P000" . $add;
            } else if (strlen($add) == 2) {
                $format = "P00" . $add;
            } else if (strlen($add) == 3) {
                $format = "P0" . $add;
            } else {
                $format = "P" . $add;
            }
        }
        return $format;
    }
    public function KodePenyediaJasa()
    {
        $jasa = PenyediaJasa::orderBy('id_penyediajasa', 'desc')->first();

        if (empty($jasa)) {
            $format = "JS0001";
        } else {
            $kode = $jasa->id_penyediajasa;
            $num = substr($kode, 2, 4);
            $add = (int) $num + 1;
            if (strlen($add) == 1) {
                $format = "P000" . $add;
            } else if (strlen($add) == 2) {
                $format = "P00" . $add;
            } else if (strlen($add) == 3) {
                $format = "P0" . $add;
            } else {
                $format = "P" . $add;
            }
        }
        return $format;
    }
}
