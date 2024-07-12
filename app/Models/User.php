<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    // public function getDateOfBirthAttribute($value){ // date_of_birth
    //     return date('d-M-Y',strtotime($value));
    // }
    public function getDateOfBirthFormatedAttribute()
    { // date_of_birth
        return date('d-M-Y', strtotime($this->date_of_birth));
    }
    public function getStatusTextAttribute(){
        if($this->status == 1){
            return 'Active';
        }else{
            return 'InActive';
        }
    }
    public function scopeActive($query){
        return $query->where('status',1);
    }
    protected $appends=['date_of_birth_formated','status_text'];

    protected $fillable = ['name','phone','email','address','date_of_birth','status'];

    protected $hidden = ['id'];
}
