<?php

namespace App\Models;
use App\Models\Member;

use App\Models\Payment;
use App\Models\BankAccount;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Beneficiary extends Model
{
    use HasFactory;

    protected $fillable = [
        'beneficiary_firstname',
        'beneficiary_surname',
        'beneficiary_contact',
        'beneficiary_id_no',
        'beneficiary_address',
        'beneficiary_dob',
        'beneficiary_gender',
        'beneficiary_email',
        'beneficiary_relationship',
        'member_id'   
    ];

    public  function member(){
        return $this->belongsTo(Member::class);
    }

    public  function bankAccounts(){
        return $this->hasMany(BankAccount::class);
    }

    public  function payments(){
        return $this->hasMany(Payment::class);
    }
}

