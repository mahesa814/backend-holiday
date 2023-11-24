<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InclusionItem extends Model
{
    protected $guarded = ['id'];
    protected $table = 'inclusions';
    protected $hidden = [
        'created_at',
        'updated_at',
    ];
}
