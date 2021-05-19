<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Admin\Transactiondetails;
use App\Models\Admin\Travelpackages;
use App\Models\User;

class Transaction extends Model
{
    use HasFactory,SoftDeletes;

    protected $table = 'Transactions';

    protected $fillable =[
        'travel_packages_id','user_id','additional_visa','transaction_total','transaction_status'
    ];

    protected $hidden =[

    ];

    public function details()
    {
        return $this->hasMany(TransactionDetail::class,'transaction_id','id');
    }

    public function user()
    {
        return $this->belongsTo(user::class,'user_id','id');
    }

    public function travel_package()
    {
        return $this->belongsTo(Travelpackages::class,'travel_packages_id','id');
    }

}
