<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RevenueType extends Model
{
    use HasFactory;

    protected $table = 'sch_financial.revenues_types';
    protected $primaryKey = 'id';
    protected $fillable = [
      'revenue_name',
      'description'
    ];
}
