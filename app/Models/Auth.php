<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Auth extends Authenticatable
{
    use HasFactory;
    protected $table = 'tbl_akun';
    protected $primarykey = 'id_akun';
    protected $timestamp = false;
    protected $fillable = ['username', 'password', 'lvl'];
}
