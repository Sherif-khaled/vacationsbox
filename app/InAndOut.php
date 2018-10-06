<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class InAndOut
 *
 * @package App
 * @property integer $employee_code
 * @property enum $in_out_type
 * @property string $request_date
 * @property string $day
 * @property time $time
 * @property time $time_period
 * @property text $reason
*/
class InAndOut extends Model
{
    use SoftDeletes;

    protected $fillable = ['employee_code', 'in_out_type', 'request_date', 'day', 'time', 'time_period', 'reason'];
    
    public static function boot()
    {
        parent::boot();

        InAndOut::observe(new \App\Observers\UserActionsObserver);
    }

    public static $enum_in_out_type = ["Late Attendance" => "Late Attendance", "Early departure" => "Early departure"];

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
    public function setRequestDateAttribute($input)
    {
        if ($input != null && $input != '') {
            $this->attributes['request_date'] = Carbon::createFromFormat(config('app.date_format'), $input)->format('Y-m-d');
        } else {
            $this->attributes['request_date'] = null;
        }
    }

    /**
     * Get attribute from date format
     * @param $input
     *
     * @return string
     */
    public function getRequestDateAttribute($input)
    {
        $zeroDate = str_replace(['Y', 'm', 'd'], ['0000', '00', '00'], config('app.date_format'));

        if ($input != $zeroDate && $input != null) {
            return Carbon::createFromFormat('Y-m-d', $input)->format(config('app.date_format'));
        } else {
            return '';
        }
    }

    /**
     * Set attribute to date format
     * @param $input
     */
    public function setDayAttribute($input)
    {
        if ($input != null && $input != '') {
            $this->attributes['day'] = Carbon::createFromFormat(config('app.date_format'), $input)->format('Y-m-d');
        } else {
            $this->attributes['day'] = null;
        }
    }

    /**
     * Get attribute from date format
     * @param $input
     *
     * @return string
     */
    public function getDayAttribute($input)
    {
        $zeroDate = str_replace(['Y', 'm', 'd'], ['0000', '00', '00'], config('app.date_format'));

        if ($input != $zeroDate && $input != null) {
            return Carbon::createFromFormat('Y-m-d', $input)->format(config('app.date_format'));
        } else {
            return '';
        }
    }

    /**
     * Set attribute to date format
     * @param $input
     */
    public function setTimeAttribute($input)
    {
        if ($input != null && $input != '') {
            $this->attributes['time'] = Carbon::createFromFormat('H:i:s', $input)->format('H:i:s');
        } else {
            $this->attributes['time'] = null;
        }
    }

    /**
     * Get attribute from date format
     * @param $input
     *
     * @return string
     */
    public function getTimeAttribute($input)
    {
        if ($input != null && $input != '') {
            return Carbon::createFromFormat('H:i:s', $input)->format('H:i:s');
        } else {
            return '';
        }
    }

    /**
     * Set attribute to date format
     * @param $input
     */
    public function setTimePeriodAttribute($input)
    {
        if ($input != null && $input != '') {
            $this->attributes['time_period'] = Carbon::createFromFormat('H:i:s', $input)->format('H:i:s');
        } else {
            $this->attributes['time_period'] = null;
        }
    }

    /**
     * Get attribute from date format
     * @param $input
     *
     * @return string
     */
    public function getTimePeriodAttribute($input)
    {
        if ($input != null && $input != '') {
            return Carbon::createFromFormat('H:i:s', $input)->format('H:i:s');
        } else {
            return '';
        }
    }
    
}
