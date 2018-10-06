<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class VacationType
 *
 * @package App
 * @property string $title
 * @property tinyInteger $inactive
*/
class VacationType extends Model
{
    use SoftDeletes;

    protected $fillable = ['title', 'inactive'];
    
    public static function boot()
    {
        parent::boot();

        VacationType::observe(new \App\Observers\UserActionsObserver);
    }
    
}
