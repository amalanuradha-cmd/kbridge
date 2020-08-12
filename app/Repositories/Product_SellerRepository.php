<?php

namespace App\Repositories;

use App\Models\Product_Seller;
use App\Repositories\BaseRepository;

/**
 * Class Product_SellerRepository
 * @package App\Repositories
 * @version August 12, 2020, 4:27 pm UTC
*/

class Product_SellerRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'product_id',
        'seller_id'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Product_Seller::class;
    }
}
