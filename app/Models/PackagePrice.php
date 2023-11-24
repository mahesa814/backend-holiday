<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PackagePrice extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $table = 'package_prices';

    protected $hidden = [
        'created_at',
        'updated_at',
    ];
}
