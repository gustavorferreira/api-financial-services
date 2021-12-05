<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExpenseType extends Model
{
    use HasFactory;

    protected $table = 'sch_financial.expenses_types';
    protected $primaryKey = 'id';
    protected $fillable = [
        'expense_name',
        'description'
    ];
}
