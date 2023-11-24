<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    protected $guarded = ['id'];
    protected $table = 'order_details';

    public function package()
    {
        return $this->belongsTo(Package::class, 'package_id', 'id')->with('review');
    }
}
