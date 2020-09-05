<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable,SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = ['id'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password','deleted_at'
    ];

    protected $attributes = [
        'role' => 'user'
    ];
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $appends = [ 'full_name' ];

    public function getFullNameAttribute(){
        return $this->attributes['first_name']. " ". $this->attributes['last_name'];
    }


    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope('active_users', function (Builder $builder) {
            $builder->where('status','1');
        });
    }
}
