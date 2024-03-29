<?php

namespace App\Models;

use App\Models\FunctionalArea;
use App\Models\Process;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BusinessUnit extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description'
         
    ];

    public  function functionalAreas(){
        return $this->hasMany(FunctionalArea::class);
    }

   
}
