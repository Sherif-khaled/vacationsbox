<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Errand
 *
 * @package App
 * @property integer $employee_code
 * @property string $request_date
 * @property string $start_date
 * @property string $end_date
 * @property string $errand_period
 * @property string $employee_alternative
 * @property text $errand_reason
*/
class Errand extends Model
{
    use SoftDeletes;

    protected $fillable = ['employee_code', 'request_date', 'start_date', 'end_date', 'errand_period', 'errand_reason', 'employee_alternative_id'];
    
    public static function boot()
    {
        parent::boot();

        Errand::observe(new \App\Observers\UserActionsObserver);
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
    public function setStartDateAttribute($input)
    {
        if ($input != null && $input != '') {
            $this->attributes['start_date'] = Carbon::createFromFormat(config('app.date_format'), $input)->format('Y-m-d');
        } else {
            $this->attributes['start_date'] = null;
        }
    }

    /**
     * Get attribute from date format
     * @param $input
     *
     * @return string
     */
    public function getStartDateAttribute($input)
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
    public function setEndDateAttribute($input)
    {
        if ($input != null && $input != '') {
            $this->attributes['end_date'] = Carbon::createFromFormat(config('app.date_format'), $input)->format('Y-m-d');
        } else {
            $this->attributes['end_date'] = null;
        }
    }

    /**
     * Get attribute from date format
     * @param $input
     *
     * @return string
     */
    public function getEndDateAttribute($input)
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
    public function setErrandPeriodAttribute($input)
    {
        if ($input != null && $input != '') {
            $this->attributes['errand_period'] = Carbon::createFromFormat(config('app.date_format') . ' H:i:s', $input)->format('Y-m-d H:i:s');
        } else {
            $this->attributes['errand_period'] = null;
        }
    }

    /**
     * Get attribute from date format
     * @param $input
     *
     * @return string
     */
    public function getErrandPeriodAttribute($input)
    {
        $zeroDate = str_replace(['Y', 'm', 'd'], ['0000', '00', '00'], config('app.date_format') . ' H:i:s');

        if ($input != $zeroDate && $input != null) {
            return Carbon::createFromFormat('Y-m-d H:i:s', $input)->format(config('app.date_format') . ' H:i:s');
        } else {
            return '';
        }
    }

    /**
     * Set to null if empty
     * @param $input
     */
    public function setEmployeeAlternativeIdAttribute($input)
    {
        $this->attributes['employee_alternative_id'] = $input ? $input : null;
    }
    
    public function employee_alternative()
    {
        return $this->belongsTo(User::class, 'employee_alternative_id');
    }
    
}
