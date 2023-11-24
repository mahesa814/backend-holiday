<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PackageExclusions extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $table = 'package_exclusions';
    protected $cast = [
        'item_id' => 'array'
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    public function getItemIdAttribute($value)
    {
        return json_decode($value);
    }

    public function detail()
    {
        return $this->hasOne(ExclusionItem::class, 'id', 'item_id');
    }
}
