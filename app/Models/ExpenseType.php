<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExpenseType extends Model
{
    use HasFactory;

    protected $table = 'expenses_types';
    protected $primaryKey = 'id';
    protected $fillable = [
        'expense_name',
        'description'
    ];
}
