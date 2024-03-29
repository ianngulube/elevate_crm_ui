<?php

namespace App\Models;

use App\Models\OpportunityCategory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class OpportunitySubCategory extends Model
{
    use HasFactory;

    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'opportunity_category_id'
         
    ];

    public  function category(){
        return $this->belongsTo(OpportunityCategory::class);
    }
}
