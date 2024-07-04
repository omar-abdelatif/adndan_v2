<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cases extends Model
{
    use HasFactory;
    protected $table = 'cases';
    protected $fillable = [
        'fullname',
        'ssn',
        'phone_number',
        'age',
        'address',
        'income_type',
        'benefit_type',
        'marital_status',
        'health_status',
        'monthly_income',
        'sons',
        'daughters',
        'gov',
        'imgs',
    ];
}
