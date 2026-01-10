<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Services\CartService;

class CartController extends Controller
{

    protected $cartService;

    public function __construct(CartService $cartService)
    {
        $this->cartService = $cartService;
    }

    // Add to cart
    public function add(Request $request, $ArticleId)
    {
        $Article = Article::findOrFail($ArticleId);

        $this->cartService->add($Article, $request->input('quantity', 1));

        return redirect()->back()->with('success', 'Articulo añadido');
    }

    // List cart items
    public function index()
    {

        $cartItems = $this->cartService->getContent();
        $total = $this->cartService->getTotal();

        return view('cart.index')->with([
            'cartItems' => $cartItems,
            'total' => $total
        ]);
    }

    // Remove from cart
    public function remove($ArticleId)
    {
        $this->cartService->remove($ArticleId);
        return redirect()->back()->with('success', 'Articulo eliminado');
    }

    // Clear cart
    public function clear()
    {
        $this->cartService->clear();
        return redirect()->back()->with('success', 'Carrito vaciado');
    }
}
