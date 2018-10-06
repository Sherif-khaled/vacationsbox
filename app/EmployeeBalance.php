<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class EmployeeBalance
 *
 * @package App
 * @property string $employee_code
 * @property integer $yearly_balance
 * @property integer $casual_balance
 * @property integer $exhausted_annually
 * @property integer $exhausted_casual
*/
class EmployeeBalance extends Model
{
    use SoftDeletes;

    protected $fillable = ['yearly_balance', 'casual_balance', 'exhausted_annually', 'exhausted_casual', 'employee_code_id'];
    
    public static function boot()
    {
        parent::boot();

        EmployeeBalance::observe(new \App\Observers\UserActionsObserver);
    }

    /**
     * Set to null if empty
     * @param $input
     */
    public function setEmployeeCodeIdAttribute($input)
    {
        $this->attributes['employee_code_id'] = $input ? $input : null;
    }

    /**
     * Set attribute to money format
     * @param $input
     */
    public function setYearlyBalanceAttribute($input)
    {
        $this->attributes['yearly_balance'] = $input ? $input : null;
    }

    /**
     * Set attribute to money format
     * @param $input
     */
    public function setCasualBalanceAttribute($input)
    {
        $this->attributes['casual_balance'] = $input ? $input : null;
    }

    /**
     * Set attribute to money format
     * @param $input
     */
    public function setExhaustedAnnuallyAttribute($input)
    {
        $this->attributes['exhausted_annually'] = $input ? $input : null;
    }

    /**
     * Set attribute to money format
     * @param $input
     */
    public function setExhaustedCasualAttribute($input)
    {
        $this->attributes['exhausted_casual'] = $input ? $input : null;
    }
    
    public function employee_code()
    {
        return $this->belongsTo(User::class, 'employee_code_id');
    }
    
}
