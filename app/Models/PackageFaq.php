<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PackageFaq extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $table = 'package_faqs';

    protected $hidden = [
        'created_at',
        'updated_at',
    ];
}
