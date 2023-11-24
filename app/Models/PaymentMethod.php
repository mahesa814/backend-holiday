<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentMethod extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $table = 'payment_method';

    public function bank()
    {
        return $this->belongsTo(Banks::class, 'pm_id', 'id');
    }
    public function ewallet()
    {
        return $this->belongsTo(Ewallet::class, 'pm_id', 'id');
    }
    public function otc()
    {
        return $this->belongsTo(Otc::class, 'pm_id', 'id');
    }
    public function paylatter()
    {
        return $this->belongsTo(Paylatter::class, 'pm_id', 'id');
    }
    public function qr ()
    {
        return $this->belongsTo(Qr::class,'pm_id','id');
    }
}
