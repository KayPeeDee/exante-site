<?php

namespace App\Repositories;

use App\Models\Product;

class ProductRepository{

    public function __construct()
    {}

    public function createProduct(array $product)
    {
        return Product::create([
            'name' => $product['name'],
            'sub_title' => $product['sub_title'],
            'description' => $product['description'],
            'weblink' => $product['weblink'],
            'image' => $product['image']
        ]);
    }

    public function getAllProducts()
    {
        return Product::latest()->get();
    }

    public function getProductById($id)
    {
        return Product::find($id);
    }

    public function updateProductDetails(array $product, $id)
    {
        return Product::find($id)->update([
            'name' => $product['name'],
            'sub_title' => $product['sub_title'],
            'description' => $product['description'],
            'weblink' => $product['weblink'] 
        ]);
    }

    public function updateProductImage($fileName, $id)
    {
        return Product::find($id)->update([
            'image' => $fileName
        ]);
    }

    public function deleteProduct($id)
    {
        Product::destroy($id);
    }
}