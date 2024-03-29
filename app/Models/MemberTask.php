<?php

namespace App\Models;

use App\Models\User;
use App\Models\Member;
use App\Models\MemberTaskNote;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MemberTask extends Model
{
    use HasFactory;
    protected $fillable = [
        'name'	 ,
        'description'	,
        'type'	 ,
        'dueDate'	 ,
        'status',
        'priority'	,
        'user_id'  ,
        'assignedTo'  ,
        'member_id'
            ];

    public  function member(){
        return $this->belongsTo(Member::class);
    }

    public  function user(){
        return $this->belongsTo(User::class);
    }

    public  function assignedTo(){
        return $this->belongsTo(User::class);
    }

    public  function notes(){
        return $this->hasMany(MemberTaskNote::class);
    }
}
