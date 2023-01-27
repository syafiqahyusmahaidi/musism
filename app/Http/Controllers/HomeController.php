<?php

namespace App\Http\Controllers;
use App\Product;
use App\Brand;
use App\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request, $id = null)
    {
      
        $brand = Brand::all();
        $category = Category::all();

        $products = Product::where('title', 'LIKE', '%'.$request->search.'%')->paginate(30);
        return view('home', compact('products','brand', 'category', 'id'));
        ;
    }
    
    public function brand($id)
    {

        $brand = Brand::all();

        $products = Product::where('brand_id', $id)->paginate(30);
        return view('home', compact('products', 'brand', 'id'));

    }
    public function show($id)
    {
        $products = Product::findOrFail($id);
        return view('service.show', compact('services'));
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function adminHome()
    {
        return view('adminHome');
    }


}
