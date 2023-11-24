<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class Order extends Model
{
    protected $guarded = ['id'];
    protected $table = 'orders';

    public function detail()
    {
        return $this->hasOne(OrderDetail::class, 'order_id', 'id')->with('package');
    }

    public function package()
    {
        return $this->belongsTo(Package::class, 'booking_id', 'id');
    }

    public function contact()
    {
        return $this->belongsTo(OrderContact::class, 'id', 'order_id');
    }

    public function passanger()
    {
        return $this->hasMany(OrderPassanger::class, 'order_id', 'id');
    }
    public function xendit()
    {
        return $this->hasOne(Xendits::class, 'order_id', 'id');
    }
    public function cc()
    {
        return $this->hasOne(XenditCreditCard::class, 'order_id', 'id')->orderby('created_at','desc');
    }
    public function xenditeotc()
    {
        return $this->hasOne(Xenditeotc::class, 'order_id', 'id');
    }
    public function xenditeqr()
    {
        return $this->hasOne(XenditQr::class, 'order_id', 'id');
    }
    public function xenditewallet()
    {
        return $this->hasOne(Xenditewallet::class, 'order_id', 'id');
    }
    public function xenditepaylatter()
    {
        return $this->hasOne(Xenditpl::class, 'order_id', 'id');
    }
}
