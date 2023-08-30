<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;
    protected $table = 'barang';
    protected $primarykey = 'id_barang';
    public $timestamp = false;
    protected $fillable =['id_barang', 'nama_barang', 'harga', 'stok'];

}
