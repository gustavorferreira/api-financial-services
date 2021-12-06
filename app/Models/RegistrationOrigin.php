<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegistrationOrigin extends Model
{
    use HasFactory;

    protected $table = 'registrations_origins';
    protected $primaryKey = 'id';
    protected $fillable = [
      'system_name',
      'description'
    ];
}
