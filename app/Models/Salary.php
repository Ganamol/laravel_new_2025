<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Salary extends Model
{
    protected $primaryKey='s_id';
    protected $fillable = [
        'id',
        'salary',
        'month',
        'year',
        'status',
    ];
}
