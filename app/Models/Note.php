<?php

namespace App\Models;

use App\Models\Member;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Note extends Model
{
    use HasFactory;

    protected $fillable = [
        'description',
       

         
    ];

    public  function member(){
        return $this->belongsTo(Member::class);
    }

    public  function user(){
        return $this->belongsTo(User::class);
    }
}
