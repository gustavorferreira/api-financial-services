<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class People extends Model
{
    use HasFactory;

    protected $table = 'sch_register.peoples';
    protected $primaryKey = 'idpeo';
    protected $fillable = [
        'name',
        'registration_origin_id',
        'status_id'
    ];
}
