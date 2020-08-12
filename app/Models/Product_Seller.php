<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * Class Product_Seller
 * @package App\Models
 * @version August 12, 2020, 4:27 pm UTC
 *
 * @property string $product_id
 * @property string $seller_id
 */
class Product_Seller extends Model
{

    public $table = 'product__sellers';
    



    public $fillable = [
        'product_id',
        'seller_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'product_id' => 'string',
        'seller_id' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
