<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PackageReview extends Model
{
    protected $guarded = ['id'];

    protected $table = 'package_reviews';

    public function user()
    {
        return $this->hasMany(User::class, 'id', 'user_id');
    }
    public function package()
    {
        return $this->hasOne(Package::class, 'id', 'package_id');
    }
}
