<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    // protected $fillable = [
    //     'title',
    //     'desc',
    //     'price',
    //     'package_available',
    //     'include_tax',
    //     'tax_value',
    //     'status',
    //     'categories_id',
    //     'user_id',
    //     'is_vendor'
    // ];
    // protected $table = 'packages';

//    public function getMutatedAttributes( $test )
//    {
//         78;
//    }

    public function detail()
    {
        return $this->belongsTo(PackageDetail::class, 'id', 'package_id')->with('activity');
    }

    public function location()
    {
        return $this->belongsTo(PackageLocation::class, 'id', 'package_id')->with('country', 'state', 'city');
    }

    public function file()
    {
        return $this->belongsTo(PackageFile::class, 'id', 'package_id');
    }

    public function itinerary()
    {
        return $this->belongsTo(PackageItinerary::class, 'id', 'package_id');
    }

    public function category()
    {
        return $this->hasOne(Category::class, 'id', 'categories_id');
    }

    public function activity()
    {
        return $this->hasMany(ActivityDetail::class, 'package_id', 'id');
    }

    public function inclusion()
    {
        return $this->hasMany(PackageInclusions::class, 'package_id', 'id');
    }

    public function faq()
    {
        return $this->hasMany(PackageFaq::class, 'package_id', 'id');
    }

    public function catalog()
    {
        return $this->hasMany(PackageCatalog::class, 'package_id', 'id');
    }
    public function review()
    {
        return $this->hasMany(PackageReview::class, 'package_id', 'id')->with('user');
    }

    public function links(){
        return Package::paginate(1);
    }



}
