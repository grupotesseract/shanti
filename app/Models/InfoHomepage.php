<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class InfoHomepage
 * @package App\Models
 * @version September 21, 2018, 9:53 pm BRT
 *
 */
class InfoHomepage extends Model
{
    use SoftDeletes;

    public $table = 'info_homepages';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
