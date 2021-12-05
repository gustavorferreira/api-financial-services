<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Revenue extends Model
{
    use HasFactory;

    protected $table = 'sch_financial.revenues';
    protected $primaryKey = 'idpeo';
    protected $fillable = [
      'revenue_type_id',
      'value',
      'fees',
      'revenue_date',
      'reference_date'
    ];
}
