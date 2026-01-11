<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Brand;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $articles = Article::query();

        if ($request->filled('brand')) {
            $articles->where('brand_id', $request->input('brand'));
        }

        if ($request->filled('category')) {
            $articles->where('category_id', $request->input('category'));
        }

        if ($request->filled('max_price')) {
            $articles->where('price', '<=', $request->input('max_price'));
        }

        if ($request->filled('age')) {
            $articles->where('min_age', '<=', $request->input('age'))
                ->where('max_age', '>=', $request->input('age'));
        }

        $articles = $articles->get();

        $brands = Brand::all();
        $categories = Category::all();

        $cart = session()->get('cart', []);

        return view('articles.index')->with([
            'articles' => $articles,
            'brands' => $brands,
            'categories' => $categories,
            'cart' => $cart
        ]);
    }

    public function indexAdmin(Request $request)
    {
        $articles = Article::query();

        if ($request->filled('brand')) {
            $articles->where('brand_id', $request->input('brand'));
        }

        if ($request->filled('category')) {
            $articles->where('category_id', $request->input('category'));
        }

        if ($request->filled('max_price')) {
            $articles->where('price', '<=', $request->input('max_price'));
        }

        if ($request->filled('age')) {
            $articles->where('min_age', '<=', $request->input('age'))
                ->where('max_age', '>=', $request->input('age'));
        }

        $articles = $articles->get();

        $brands = Brand::all();
        $categories = Category::all();

        $cart = session()->get('cart', []);

        return view('admin.articles.index')->with([
            'articles' => $articles,
            'brands' => $brands,
            'categories' => $categories,
            'cart' => $cart
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $brands = Brand::all();
        $categories = Category::all();

        return view('articles.create')->with([
            'brands' => $brands,
            'categories' => $categories
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $rules = [
            'name' => 'required|string|max:100',
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0|max:99999999.99',
            'brand_id' => 'required|exists:brands,id',
            'category_id' => 'required|exists:categories,id',
            'min_age' => 'required|integer|min:0|max:120',
            'max_age' => 'required|integer|min:0|gte:min_age|max:120',
        ];

        $validatedData = $request->validate($rules);

        $article = Article::create($validatedData);

        return view('articles.show')->with(['article' => $article]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        $cart = session()->get('cart', []);

        return view('articles.show')->with(['article' => $article, 'cart' => $cart]);
    }

    public function showAdmin(Article $article)
    {
        $cart = session()->get('cart', []);

        return view('admin.articles.show')->with(['article' => $article, 'cart' => $cart]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {
        $brands = Brand::all();
        $categories = Category::all();

        return view('articles.edit')->with([
            'article' => $article,
            'brands' => $brands,
            'categories' => $categories
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Article $article)
    {
        $rules = [
            'name' => 'required|string|max:100',
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0|max:99999999.99',
            'brand_id' => 'required|exists:brands,id',
            'category_id' => 'required|exists:categories,id',
            'min_age' => 'required|integer|min:0|max:120',
            'max_age' => 'required|integer|min:0|gte:min_age|max:120',
        ];

        $validatedData = $request->validate($rules);

        $article->update($validatedData);

        return view('admin.articles.show')->with(['article' => $article]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        $article->delete();

        return redirect()->route('dashboard.articles');
    }
}
