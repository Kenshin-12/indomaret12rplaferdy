<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;
    protected $table = 'detil_transaksi';
    protected $primarykey ='id_detil_transaksi';
    protected $fillable = ['id_kasir', 'tanggal_transaksi', 'total'];
}
