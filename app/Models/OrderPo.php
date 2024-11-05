<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderPo extends Model
{
    use HasFactory;

    // Specify the table name if it doesn't follow Laravel's naming conventions
    protected $table = 'orders_po';

    // Define the fillable attributes to allow mass assignment
    protected $fillable = [
        'po',
        'model_name',
        'style',
        'gender',
        'size_36',
        'size_37',
        'size_38',
        'size_39',
        'size_40',
        'size_41',
        'size_42'
    ];
}
