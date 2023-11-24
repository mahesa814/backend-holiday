<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AcommodationDetail extends Model
{
    protected $guarded = ['id'];
    protected $table = 'acommodation_details';

    protected $hidden = [
        'created_at',
        'updated_at',
    ];
}
