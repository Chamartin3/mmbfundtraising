<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array

     
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function calls()
      {     
            return $this->hasMany(Call::class);
            
      }

    public function tipo()
      {     
            if ($this->type==2) {
                return '<h6> <span class="badge badge-secondary"> מנהל  </span></h6>';
            }else{
                return '<h6><span class="badge badge-info"> המתקשר   </span></h6>';          
            };
            
      }

      use SoftDeletes;

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];


}
