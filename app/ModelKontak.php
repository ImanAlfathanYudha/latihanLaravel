<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelKontak extends Model
{
    protected $table = 'kontak';
	    protected $fillable = [
        'nama', 'email', 'nohp', 'alamat'
    ];
}
