<?php

namespace App\Models;

use App\Models\User;
use App\Models\Beneficiary;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BankAccount extends Model
{
    use HasFactory;

    protected $fillable = [
        'bank_name',
        'account_number',
        'type',
        'branch_code',
        'beneficiary_id',
        'user_id'
    ];


    public  function beneficiary(){
        return $this->belongsTo(Beneficiary::class);
    }
    public  function user(){
        return $this->belongsTo(User::class);
    }
}
