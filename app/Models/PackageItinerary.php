<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PackageItinerary extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $table = 'package_itineraries';


    protected $hidden = [
        'created_at',
        'updated_at',
    ];
}
