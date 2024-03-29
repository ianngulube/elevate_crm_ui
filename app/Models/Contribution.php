<?php

namespace App\Models;

use App\Models\Member;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Contribution extends Model
{
    use HasFactory;

      protected $fillable = [
        'amount',
        'payment_date',
        'payment_reference',
        'bank_name',
        'member_id',
        'type'

         
    ];


    public  function members(){
        return $this->belongsTo(Member::class);
    }
}
