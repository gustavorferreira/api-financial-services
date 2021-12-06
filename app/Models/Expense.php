<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    use HasFactory;

    protected $table = 'expenses';
    protected $primaryKey = 'idpeo';
    protected $fillable = [
        'expense_type_id',
        'value',
        'fees',
        'expense_date',
        'reference_date'
    ];
}
