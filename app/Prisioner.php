<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prisioner extends Model
{
    protected $fillable = [
        'name', 'birth_address', 'birth_days', 'age', 'gender', 'nasionality', 'address', 'religion', 'job'
    ];
}
