<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateProduct_SellerAPIRequest;
use App\Http\Requests\API\UpdateProduct_SellerAPIRequest;
use App\Models\Product_Seller;
use App\Repositories\Product_SellerRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class Product_SellerController
 * @package App\Http\Controllers\API
 */

class Product_SellerAPIController extends AppBaseController
{
    /** @var  Product_SellerRepository */
    private $productSellerRepository;

    public function __construct(Product_SellerRepository $productSellerRepo)
    {
        $this->productSellerRepository = $productSellerRepo;
    }

    /**
     * Display a listing of the Product_Seller.
     * GET|HEAD /productSellers
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $productSellers = $this->productSellerRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($productSellers->toArray(), 'Product  Sellers retrieved successfully');
    }

    /**
     * Store a newly created Product_Seller in storage.
     * POST /productSellers
     *
     * @param CreateProduct_SellerAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateProduct_SellerAPIRequest $request)
    {
        $input = $request->all();

        $productSeller = $this->productSellerRepository->create($input);

        return $this->sendResponse($productSeller->toArray(), 'Product  Seller saved successfully');
    }

    /**
     * Display the specified Product_Seller.
     * GET|HEAD /productSellers/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Product_Seller $productSeller */
        $productSeller = $this->productSellerRepository->find($id);

        if (empty($productSeller)) {
            return $this->sendError('Product  Seller not found');
        }

        return $this->sendResponse($productSeller->toArray(), 'Product  Seller retrieved successfully');
    }

    /**
     * Update the specified Product_Seller in storage.
     * PUT/PATCH /productSellers/{id}
     *
     * @param int $id
     * @param UpdateProduct_SellerAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateProduct_SellerAPIRequest $request)
    {
        $input = $request->all();

        /** @var Product_Seller $productSeller */
        $productSeller = $this->productSellerRepository->find($id);

        if (empty($productSeller)) {
            return $this->sendError('Product  Seller not found');
        }

        $productSeller = $this->productSellerRepository->update($input, $id);

        return $this->sendResponse($productSeller->toArray(), 'Product_Seller updated successfully');
    }

    /**
     * Remove the specified Product_Seller from storage.
     * DELETE /productSellers/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Product_Seller $productSeller */
        $productSeller = $this->productSellerRepository->find($id);

        if (empty($productSeller)) {
            return $this->sendError('Product  Seller not found');
        }

        $productSeller->delete();

        return $this->sendSuccess('Product  Seller deleted successfully');
    }
}
