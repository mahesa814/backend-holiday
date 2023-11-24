<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PackageFile extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $table = 'package_banners';

    protected $cast = [
        'image' => 'json'
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];

    protected $casts = [
        'image' => 'array'
    ];

    // public function getImage1Attribute()
    // {
    //     return getGcs('package/' . $this->attributes['image1']);
    // }

    public function getImageAttribute($value)
    {
        return json_decode($value);
    }
}
