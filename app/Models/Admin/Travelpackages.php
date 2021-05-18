<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Travelpackages extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable =[
        'title','slug','location','about','featured_event','language','foods','departure_date','duration','type','price'
    ];

    protected $hidden=[

    ];

    public function galleries()
    {
        return $this->hasMany(gallery::class,'travel_packages_id','id');
    }
}
