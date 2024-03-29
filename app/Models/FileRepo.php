<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FileRepo extends Model
{
    use HasFactory;

  

    protected $fillable = [
        'type',
        'fileUrl',
        'description',
        'user_id'      

         
    ];

    public  function user(){
        return $this->belongsTo(User::class);
    }
}
