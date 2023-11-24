<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PackageLocation extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $table = 'package_locations';

    protected $hidden = [ 
        'created_at',
        'updated_at'
    ];
    public function country()
    {
        return $this->hasOne(Country::class, 'id', 'country_id');
    }
    public function state()
    {
        return $this->hasOne(State::class, 'id', 'state_id');
    }
    public function city()
    {
        return $this->hasOne(City::class, 'id', 'city_id');
    }
    public function countryss()
    {
        return $this->hasMany(Country::class, 'id', 'country_id');
    }
}
