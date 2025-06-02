<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
      protected $primaryKey='f_id';
      protected $fillable = [
       
        'file_name',
       
    ];
}
