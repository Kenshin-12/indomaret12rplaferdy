<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    use HasFactory;
    protected $table = 'jadwal';
    protected $primarykey ='id_jadwal';
    protected $guarded = 'id_jadwal';
    public $timestamp = false;
}
