<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * Class Seller
 * @package App\Models
 * @version August 12, 2020, 3:30 pm UTC
 *
 * @property string $name
 */
class Seller extends Model
{

    public $table = 'sellers';
    



    public $fillable = [
        'name'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    public function products()
    {
        return $this->belongsToMany('App\Models\Product', 'id', 'id');
    }

    
}
