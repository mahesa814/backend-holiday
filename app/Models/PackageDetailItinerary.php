<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PackageDetailItinerary extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $table = 'package_detail_itineraries';

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    public function activityDetail()
    {
        return $this->hasMany(ActivityDetail::class, 'package_id', 'activity_id');
    }

    public function activity()
    {
        return $this->hasOne(Activity::class, 'id', 'activity_id')->with('category');
    }
}
