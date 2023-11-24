<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PackageDetail extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $table = 'package_details';

    protected $hidden = [
        'created_at',
        'updated_at'
    ];

    public function activity()
    {
        return $this->belongsTo(Activity::class, 'activity_id', 'id')->with('category');
    }
}
