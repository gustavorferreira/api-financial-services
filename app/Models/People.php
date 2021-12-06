<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class People extends Model
{
    use HasFactory;

    protected $table = 'peoples';
    protected $primaryKey = 'idpeo';
    protected $fillable = [
        'first_name',
        'last_name',
        'registration_origin_id',
        'status_id'
    ];
}
