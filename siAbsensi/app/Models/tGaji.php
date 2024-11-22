<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tGaji extends Model
{
    use HasFactory;
    protected $fillable = ['kodeGaji','periodeGaji','incentive','gajiPokok','persenBpjs','rupiahBpjs','hariAlpha','rupiahPerharialpha','totalRupiahperharialpha','totalGaji','tanggalHitung','pegawai'];
}
