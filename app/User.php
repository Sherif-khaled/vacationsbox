<?php
namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Notifications\ResetPassword;
use Carbon\Carbon;
use Hash;

/**
 * Class User
 *
 * @package App
 * @property string $name
 * @property string $email
 * @property string $password
 * @property string $role
 * @property enum $user_status
 * @property string $remember_token
 * @property integer $employee_code
 * @property enum $gender
 * @property string $dateofbirth
 * @property string $job_title
 * @property string $profile_picture
 * @property string $department
*/
class User extends Authenticatable
{
    use Notifiable;
    protected $fillable = ['name', 'email', 'password', 'user_status', 'remember_token', 'employee_code', 'gender', 'dateofbirth', 'job_title', 'profile_picture', 'role_id', 'department_id'];
    
    public static function boot()
    {
        parent::boot();

        User::observe(new \App\Observers\UserActionsObserver);
    }
    

    public static $enum_user_status = ["Active" => "Active", "Inactive" => "Inactive"];

    public static $enum_gender = ["Male" => "Male", "Female" => "Female"];
    /**
     * Hash password
     * @param $input
     */
    public function setPasswordAttribute($input)
    {
        if ($input)
            $this->attributes['password'] = app('hash')->needsRehash($input) ? Hash::make($input) : $input;
    }
    

    /**
     * Set to null if empty
     * @param $input
     */
    public function setRoleIdAttribute($input)
    {
        $this->attributes['role_id'] = $input ? $input : null;
    }

    /**
     * Set attribute to money format
     * @param $input
     */
    public function setEmployeeCodeAttribute($input)
    {
        $this->attributes['employee_code'] = $input ? $input : null;
    }

    /**
     * Set attribute to date format
     * @param $input
     */
    public function setDateofbirthAttribute($input)
    {
        if ($input != null && $input != '') {
            $this->attributes['dateofbirth'] = Carbon::createFromFormat(config('app.date_format'), $input)->format('Y-m-d');
        } else {
            $this->attributes['dateofbirth'] = null;
        }
    }

    /**
     * Get attribute from date format
     * @param $input
     *
     * @return string
     */
    public function getDateofbirthAttribute($input)
    {
        $zeroDate = str_replace(['Y', 'm', 'd'], ['0000', '00', '00'], config('app.date_format'));

        if ($input != $zeroDate && $input != null) {
            return Carbon::createFromFormat('Y-m-d', $input)->format(config('app.date_format'));
        } else {
            return '';
        }
    }

    /**
     * Set to null if empty
     * @param $input
     */
    public function setDepartmentIdAttribute($input)
    {
        $this->attributes['department_id'] = $input ? $input : null;
    }
    
    public function role()
    {
        return $this->belongsTo(Role::class, 'role_id');
    }
    
    public function department()
    {
        return $this->belongsTo(Department::class, 'department_id')->withTrashed();
    }
    
    
    

    public function sendPasswordResetNotification($token)
    {
       $this->notify(new ResetPassword($token));
    }
}
