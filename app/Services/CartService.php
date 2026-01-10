<?php

namespace App\Services;

use App\Models\Article;

class CartService
{
    // Add Article to cart
    public function add(Article $Article, $quantity = 1)
    {
        $cart = session()->get('cart', []);

        if (isset($cart[$Article->id])) {

            $cart[$Article->id]['quantity'] += $quantity;
        } else {

            $cart[$Article->id] = [
                "id" => $Article->id,
                "name" => $Article->name,
                "quantity" => $quantity
            ];
        }

        session()->put('cart', $cart);
    }

    // Remove Article from cart
    public function remove($ArticleId)
    {
        $cart = session()->get('cart', []);

        if (isset($cart[$ArticleId])) {
            unset($cart[$ArticleId]);
            session()->put('cart', $cart);
        }
    }

    // Clear the cart
    public function clear()
    {
        session()->forget('cart');
    }

    // Get total price of the cart
    public function getTotal()
    {
        $cart = session()->get('cart', []);
        $total = 0;

        foreach ($cart as $item) {
            $itemCurrentPrice = Article::find($item['id'])->price;

            $total += $itemCurrentPrice * $item['quantity'];
        }

        return $total;
    }

    // Get cart content
    public function getContent()
    {
        return session()->get('cart', []);
    }
}
