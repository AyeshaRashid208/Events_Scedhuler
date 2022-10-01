<?php

namespace App;

use App\Notifications\VerifyUserNotification;
use Carbon\Carbon;
use Hash;
use Illuminate\Auth\Notifications\ResetPassword;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Str;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{
    use SoftDeletes, Notifiable, HasApiTokens;

    public $table = 'users';

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $dates = [
        'updated_at',
        'created_at',
        'deleted_at',
        'email_verified_at',
    ];

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'address',
        'city',
        'postcode',
        'country_id',
        'profession',
        'website',
        'bio',
        'password',
        'created_at',
        'updated_at',
        'deleted_at',
        'remember_token',
        'email_verified_at',
        'image',
        'subscription',
        'paid_amount',
        'level',
        'active_flag',
        'id_ERP_customer_1',
        'id_ERP_customer_2',
        'id_ERP_customer_3',
        'RFC',
        'business_name',
        'user_ip',
    ];
    public function getIsAdminAttribute()
    {
        return $this->roles()->where('id', 1)->exists();
    }

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        self::created(function (User $user) {
            $registrationRole = config('panel.registration_default_role');

            if (!$user->roles()->get()->contains($registrationRole)) {
                $user->roles()->attach($registrationRole);
            }
        });
    }

    // public function userResults()
    // {
    //     return $this->hasMany(Result::class, 'user_id', 'id');
    // }

    public function getEmailVerifiedAtAttribute($value)
    {
        return $value ? Carbon::createFromFormat('Y-m-d H:i:s', $value)->format(config('panel.date_format') . ' ' . config('panel.time_format')) : null;
    }

    public function setEmailVerifiedAtAttribute($value)
    {
        $this->attributes['email_verified_at'] = $value ? Carbon::createFromFormat(config('panel.date_format') . ' ' . config('panel.time_format'), $value)->format('Y-m-d H:i:s') : null;
    }

    public function setPasswordAttribute($input)
    {
        if ($input) {
            $this->attributes['password'] = app('hash')->needsRehash($input) ? Hash::make($input) : $input;
        }
    }

    public function sendPasswordResetNotification($token)
    {
        $this->notify(new ResetPassword($token));
    }

    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }
    
    public function Interview()
    {
        return $this->belongsToMany(Interview::class);
    }
    public function UserResult()
    {
        return $this->belongsToMany(Result::class, 'user_id','id');
    }

    // public function setImageAttribute($file)
    // {
    //     if ($file) {
    //         $name = time().'.'.$file->extension(); 
    //         $file->storeAs('public', $name);
    //         $this->attributes['image'] = $name;
    //     }
    // }

    // public function getImageAttribute($value)
    // {
    //     return $value ? asset('storage/' . $value) : $value;
    // }
}
