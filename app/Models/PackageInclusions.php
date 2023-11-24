<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PackageInclusions extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $table = 'package_inclusions';


    protected $hidden = [
        'created_at',
        'updated_at',
    ];


    public function detail()
    {
        return $this->hasOne(InclusionItem::class, 'id', 'item_id');
    }
}
