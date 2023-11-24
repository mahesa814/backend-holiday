<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PackageCatalog extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $table = 'package_catalogs';
    protected $casts = [
        'available_day' => 'array'
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    public function getItemIdAttribute($value)
    {
        return json_decode($value);
    }
}
