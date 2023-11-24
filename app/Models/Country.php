<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $guarded = ['id'];
    protected $table = 'countries';

    public function country()
    {
        return $this->belongsTo(PackageLocation::class, 'country_id', 'id');
    }
}