<?php

namespace App\Repositories;

use App\Models\Seller;
use App\Repositories\BaseRepository;

/**
 * Class SellerRepository
 * @package App\Repositories
 * @version August 12, 2020, 3:30 pm UTC
*/

class SellerRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name'
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
        return Seller::class;
    }
}
