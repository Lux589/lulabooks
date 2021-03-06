<?php
namespace ShopKit\Core;

use ShopKit\Core\Cart\ShopKitCart;
use Illuminate\Support\Facades\Session;

class ShopKit
{
    public static function getShoppingCart()
    {
        $cart = Session::get('shopkit-cart', null);

        if (is_null($cart)) {
            $cart = new ShopKitCart();

            Session::set('shopkit-cart', $cart);
        }

        return $cart;
    }
}
