<?php

namespace App\Models;

use App\Models\Note;
use App\Models\Document;
use App\Models\MemberTask;
use App\Models\Beneficiary;
use App\Models\Contribution;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Member extends Model
{
    use HasFactory;



    protected $fillable = [
        'title',
        'firstname',
        'surname',
        'dob',
        'gender',
        'id_number',
        'profession',
        'passport_number',
        'status',
        'marital_status',
        'member_type',
        'next_of_kin_firstname',
        'next_of_kin_surname',
        'next_of_kin_phone',
        'next_of_kin_email',
        'cellphone_number',
        'membership_date',
        'home_number',
        'office_number',
        'email',
        'website',
        'address_line1',
        'address_line2',
        'address_line3',
        'postal_code',
        'city',
        'province',
        'office_address_line1',
        'office_address_line2',
        'office_address_line3',
        'office_postal_code',
        'office_province'
        
         
    ];

    public  function contributions(){
        return $this->hasMany(Contribution::class);
    }
    public  function notes(){
        return $this->hasMany(Note::class);
    }

    public  function membertasks(){
        return $this->hasMany(MemberTask::class);
    }
    public  function documents(){
        return $this->hasMany(Document::class);
    }
    public  function beneficiaries(){
        return $this->hasMany(Beneficiary::class);
    }
}
