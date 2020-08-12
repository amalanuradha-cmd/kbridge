<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * Class Product
 * @package App\Models
 * @version August 12, 2020, 3:17 pm UTC
 *
 * @property string $name
 * @property string $image
 * @property string $stock
 * @property string $description
 */
class Product extends Model
{

    public $table = 'products';
    



    public $fillable = [
        'name',
        'image',
        'stock',
        'description',
        'seller_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'image' => 'string',
        'stock' => 'string',
        'description' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    public function sellers()
    {
        return $this->belongsToMany('App\Models\Seller');
    }

    
}
