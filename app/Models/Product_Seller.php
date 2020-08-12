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

    public $table = 'product_seller';
    



    public $fillable = [
        'product_id',
        'seller_id',
        'price',
        'stock'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'product_id' => 'string',
        'seller_id' => 'string',
        'price',
        'stock'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
