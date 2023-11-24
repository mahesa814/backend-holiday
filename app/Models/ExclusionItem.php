<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExclusionItem extends Model
{
    protected $guarded = ['id'];
    protected $table = 'exclusion_items';


    protected $hidden = [
        'created_at',
        'updated_at',
    ];
}
