<?php

namespace App\Http\Controllers\Components;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProductModel;
use App\Models\CartModel;
use App\Models\WishlistModel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    public function add(Request $request) {
        $id = $request->id;
        if($id != null) {
            $cart = CartModel::getProductInCart($id, $request->size, $request->color);
            $product = ProductModel::find($id);
            if ($cart->isEmpty()) {      
                $cartNew = new CartModel;
                $cartNew->product_id = $product->id;                  
                $cartNew->quantity = $request->quantity ?? 1;
                $cartNew->money = $product->discount == null ? (int) $cartNew->quantity * (int) $product->price : (int) $product->price - ((int) $cartNew->quantity * (int) $product->price * (int) $product->discount / 100);
                $cartNew->user_id = Auth::user()->id;
                $cartNew->size_id = $request->size ?? 1;
                $cartNew->color_id = $request->color ?? 1;
                $cartNew->save();
            } else {       
                $cartFirst = $cart->first();
                $data['quantity'] = $request->quantity ? $cartFirst->quantity + $request->quantity : $cart->quantity + 1;
                $data['money'] = (int) $product->price * (int) $data['quantity'] - (int) $data['quantity'] * (int) $product->price * (int) $product->discount / 100;
                $data['size_id'] = $request->size ?? 1;
                $data['color_id'] = $request->color ?? 1;
                DB::table('carts')->where('id', $cartFirst->id)->update($data);
            }
            return redirect()->back()->with('success', 'Cart added successfully');
        }
    }
    

    public function view_cart() {
        $data['header_title'] = 'View Cart';
        $data['total'] = CartModel::total();
        session()->put('fntotal', $data['total']);
        session()->put('type_shipping', 'Free Shipping');      
        return view('client/components/cart', $data);
    }

    public function delete($id) {
        $cart = CartModel::find($id);
        $cart->delete();
        return redirect()->back()->with('success', "Product Successfully Deleted");
    }

}
