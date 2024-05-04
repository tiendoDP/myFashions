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
        //dd($data['product_detail']);
        $data['header_title'] = $data['product_detail']['name'];
        if($data['product_detail']['sex'] == null) $data['product_detail']['sex'] = 2;
        $data['also_like'] = CategoryModel::find($data['product_detail']->category_id)->products->take(6);
        $data['comments'] = ProductModel::find($id)->comments()->orderBy('created_at', 'desc')->get();
        $data['images'] = ProductModel::find($id)->images;
        $data['product_sizes'] = ProductModel::find($id)->sizes;
        $data['product_colors'] = ProductModel::find($id)->colors;
        
        return view('client/components/productDetail', $data);
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
