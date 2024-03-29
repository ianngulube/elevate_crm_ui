<?php

namespace App\Models;

use App\Models\User;
use App\Models\BankAccount;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Payment extends Model
{
    use HasFactory;
/*
 
            $table->string('type');
            $table->decimal('amount',20,2);
            $table->unsignedBigInteger('beneficiary_id'); 
            $table->unsignedBigInteger('bank_account_id'); 
            $table->unsignedBigInteger('user_id');    
*/

protected $fillable = [
    'reference',
    'payment_date',
    'payment_reason',
    'type',
    'beneficiary_id',
    'bank_account_id',
    'user_id',
    'amount'     
];


    public  function beneficiary(){
        return $this->belongsTo(Beneficiary::class);
    }

    public  function bankAccount(){
        return $this->belongsTo(BankAccount::class);
    }

    public  function user(){
        return $this->belongsTo(User::class);
    }
}
