<?php

namespace App\Models;

use App\Models\FileRepo;
use App\Models\MemberTask;
use App\Models\BankAccount;
use Illuminate\Support\Facades\Hash;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /*public function setPasswordAttribute($password){
        $this->attributes['password'] = Hash::make($password);
    }*/
  
    public  function roles(){
        return $this->belongsToMany('App\Models\Role');
    }

    public  function processes(){
        return $this->hasMany('App\Models\Process','user_id','id');
    }

    public  function notes(){
        return $this->hasMany(Note::class);
    }

    public  function bank_accounts(){
        return $this->hasMany(BankAccount::class);
    }

    public  function memberTasks(){
        return $this->hasMany(MemberTask::class);
    }

    public  function files(){
        return $this->hasMany(FileRepo::class);
    }


    public  function hasAnyRole(string $role){
        return null !== $this->roles()->where('name',$role)->first();
    }
    public  function hasAnyRoles(array $role){
        return null !== $this->roles()->whereIn('name',$role)->first();
    }
}
