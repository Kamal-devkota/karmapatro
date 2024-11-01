<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payroll extends Model
{
    use HasFactory;

    protected $fillable = [
		'created_by', 'user_id', 'employee_type', 'basic_salary', 'house_rent_allowance', 'medical_allowance', 'special_allowance', 'provident_fund_contribution', 'provident_fund', 'other_allowance', 'tax_deduction', 'provident_fund_deduction', 'other_deduction', 'activation_status',
	];
}
