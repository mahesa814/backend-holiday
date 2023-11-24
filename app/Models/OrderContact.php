<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderContact extends Model
{
    protected $guarded = ['id'];
    protected $table = 'order_contacts';
}
