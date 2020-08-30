<?php

namespace App\Http\Controllers\AdminPortal;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\MediaRepository;
use App\Repositories\ProductRepository;

class ProductController extends Controller
{

    protected $mediaRepository;
    protected $productRepository;

    public function __construct(MediaRepository $mediaRepository, ProductRepository $productRepository)
    {
        $this->mediaRepository = $mediaRepository;
        $this->productRepository = $productRepository;
    }

    public function createProductPage()
    {
        return view('admin-portal.pages.products.create-product');
    }

    public function createProduct(Request $request)
    {
        $inputData = $request->all();
        if ($request->hasFile('image')) {
            $fileName = $this->mediaRepository->uploadFile($request->file('image'));
            $inputData['image'] = $fileName;
        }
        $this->productRepository->createProduct($inputData);
        return redirect()->route('list-products');
    }

    public function getAllProducts()
    {
        $products = $this->productRepository->getAllProducts();
        return view('admin-portal.pages.products.products-list', compact('products'));
    }

    public function getProductById($id)
    {
        $product = $this->productRepository->getProductById($id);
        return view('admin-portal.pages.products.product-detail', compact('product'));
    }

    public function updateProductDetails(Request $request, $id)
    {
        $inputData = $request->all();
        $this->productRepository->updateProductDetails($inputData, $id);
        return back();
    }

    public function updateProductImage(Request $request, $id)
    {
        $input = $request->all();
        if ($request->hasFile('image')) {
            $fileName = $this->mediaRepository->uploadFile($request->file('image'));
            $input['image'] = $fileName;
        }
        $this->productRepository->updateProductImage($input['image'], $id);
        return back();
    }

    public function deleteProduct($id)
    {
        $this->productRepository->deleteProduct($id);
        return back();
    }
}
