<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MethodSetting extends Model
{
    use HasFactory;
    protected $table = 'method_setting';
    protected $guarded = ['id'];

}
