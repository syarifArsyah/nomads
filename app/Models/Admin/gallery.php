<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class gallery extends Model
{
    use HasFactory,SoftDeletes;

    protected $table = 'galleries';

    // protected $fillable =[
    //     'travel_packages_id','image'
    // ];
    protected $fillable =[
        'travel_packages_id','image'
    ];

    protected $hidden =[

    ];

    public function travel_package()
    {
        return $this->belongsTo(Travelpackages::class,'travel_packages_id','id');
    }
}
