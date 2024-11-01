<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SalaryPaymentDetails extends Model
{
    use HasFactory;

    protected $fillable = [
        'salary_payment_id', 'item_name', 'amount', 'status',
    ];
}
