<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Department
 *
 * @package App
 * @property string $title
 * @property string $description
*/
class Department extends Model
{
    use SoftDeletes;

    protected $fillable = ['title', 'description'];
    
    public static function boot()
    {
        parent::boot();

        Department::observe(new \App\Observers\UserActionsObserver);
    }
    
    public function user() {
        return $this->hasMany(User::class, 'department_id');
    }
}
