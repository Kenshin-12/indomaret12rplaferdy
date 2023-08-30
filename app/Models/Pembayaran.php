<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    use HasFactory;
    protected $table = 'detil_transaksi';
    protected $primarykey ='id_detil_transaksi';

    public $timestamp = false;
    protected $fillable = ['id_transaksi', 'jumlah_bayar', 'kembalian'];
}
