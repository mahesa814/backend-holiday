<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    protected $guarded = ['id'];
    protected $table = 'activities';

    public function category()
    {
        return $this->belongsTo(Category::class, 'categories_id', 'id');
    }
}
