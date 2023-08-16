<?php

class CartHelper {
    public static function addToCart($productData) {
        $cart = session('cart', []);
        array_push($cart, $productData);
        session(['cart' => $cart]);
    }

    public static function getCart() {
        return session('cart', []);
    }

    // Add more methods like updateItemQuantity, removeItem, getTotal, etc.
}
