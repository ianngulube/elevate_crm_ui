<?php

namespace App\Models;

use App\Models\OpportunitySubCategory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class OpportunityCategory extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description'
         
    ];

    public  function subCategories(){
        return $this->hasMany(OpportunitySubCategory::class);
    }
}
