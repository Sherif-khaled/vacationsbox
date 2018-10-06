<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Overtime
 *
 * @package App
 * @property integer $employee_code
 * @property string $overtime_date
 * @property time $time_start
 * @property time $time_end
 * @property time $period
 * @property string $overtime_reason
*/
class Overtime extends Model
{
    use SoftDeletes;

    protected $fillable = ['employee_code', 'overtime_date', 'time_start', 'time_end', 'period', 'overtime_reason'];
    
    public static function boot()
    {
        parent::boot();

        Overtime::observe(new \App\Observers\UserActionsObserver);
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
    public function setOvertimeDateAttribute($input)
    {
        if ($input != null && $input != '') {
            $this->attributes['overtime_date'] = Carbon::createFromFormat(config('app.date_format'), $input)->format('Y-m-d');
        } else {
            $this->attributes['overtime_date'] = null;
        }
    }

    /**
     * Get attribute from date format
     * @param $input
     *
     * @return string
     */
    public function getOvertimeDateAttribute($input)
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
    public function setTimeStartAttribute($input)
    {
        if ($input != null && $input != '') {
            $this->attributes['time_start'] = Carbon::createFromFormat('H:i:s', $input)->format('H:i:s');
        } else {
            $this->attributes['time_start'] = null;
        }
    }

    /**
     * Get attribute from date format
     * @param $input
     *
     * @return string
     */
    public function getTimeStartAttribute($input)
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
    public function setTimeEndAttribute($input)
    {
        if ($input != null && $input != '') {
            $this->attributes['time_end'] = Carbon::createFromFormat('H:i:s', $input)->format('H:i:s');
        } else {
            $this->attributes['time_end'] = null;
        }
    }

    /**
     * Get attribute from date format
     * @param $input
     *
     * @return string
     */
    public function getTimeEndAttribute($input)
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
    public function setPeriodAttribute($input)
    {
        if ($input != null && $input != '') {
            $this->attributes['period'] = Carbon::createFromFormat('H:i:s', $input)->format('H:i:s');
        } else {
            $this->attributes['period'] = null;
        }
    }

    /**
     * Get attribute from date format
     * @param $input
     *
     * @return string
     */
    public function getPeriodAttribute($input)
    {
        if ($input != null && $input != '') {
            return Carbon::createFromFormat('H:i:s', $input)->format('H:i:s');
        } else {
            return '';
        }
    }
    
}
