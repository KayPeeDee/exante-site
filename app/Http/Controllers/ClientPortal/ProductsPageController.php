<?php

namespace App\Http\Controllers\ClientPortal;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\ProductRepository;

class ProductsPageController extends Controller
{

    protected $productRepository;

    public function __construct(ProductRepository $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    public function productsList()
    {
        return view('client-portal.product-list');
    }

    public function productDetails($id)
    {
        $product = $this->productRepository->getProductById($id);
        return view('client-portal.product-detail', compact('product'));
    }
}
