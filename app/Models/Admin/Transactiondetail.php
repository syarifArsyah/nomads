<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transactiondetail extends Model
{
    use HasFactory,SoftDeletes;

    protected $table = 'transaction_details';

    protected $fillable =[
        'transaction_id','username','nationality','is_visa','doe_passport'
    ];

    protected $hidden =[

    ];

    public function transaction()
    {
        return $this->belongsTo(Transaction::class,'transaction_id','id');
    }

}
