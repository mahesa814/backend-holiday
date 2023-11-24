<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActivityDetail extends Model
{
    protected $guarded = ['id'];
    protected $table = 'activity_details';

    protected $hidden = [
        'created_at',
        'updated_at',
    ];
}
