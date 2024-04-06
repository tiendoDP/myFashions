<?php

namespace App\Http\Controllers\Components;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProductModel;
use App\Models\CategoryModel;


class ProductController extends Controller
{
    public function detailsProduct($id) {       
        $product = ProductModel::getProductById($id);
        $data['product_detail'] = $product['0'];
        $data['header_title'] = $data['product_detail']['name'];
        if($data['product_detail']['sex'] == null) $data['product_detail']['sex'] = 2;
        $data['also_like'] = CategoryModel::find($data['product_detail']->category_id)->products->take(6);
        $data['comments'] = ProductModel::find($id)->comments;
        //dd($data['comments']);
        return view('client/components/product-detail', $data);
    }

    public function listProducts(Request $request) {
        $data['header_title'] = 'List Products';
        $data['all_cate'] =CategoryModel::getRecord();
        if($request->search) {
            $data['search'] = $request->search;
        }
        $data['products'] = ProductModel::select('products.*', 'categories.name as category_name')
        ->join('categories', 'products.category_id', '=', 'categories.id')
        ->orderby('id', 'desc')
        ->paginate(3);
        return view('client/components/list-products', $data);
    }
}
