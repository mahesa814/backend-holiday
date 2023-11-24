<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $guarded = ['id'];
    protected $table = 'categories';

    public function activity()
    {
        return $this->hasMany(Activity::class, 'id', 'categories_id');
    }
}