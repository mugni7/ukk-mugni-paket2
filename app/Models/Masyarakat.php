<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Masyarakat extends Authenticatable
{
    use HasFactory;

    protected $table = 'masyarakat';

    protected $primaryKey = 'nik';

    protected $fillable = [
        'nik',
        'nama',
        'username',
        'password',
        'jenis_kelamin',
        'telp',
        'alamat'
    ];
}
