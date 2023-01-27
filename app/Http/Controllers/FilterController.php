<?php

namespace App\Http\Controllers;

use App\Filter;
use App\Product;
use App\Brand;
use App\Category;
use Illuminate\Http\Request;

class FilterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request, $id = null)
    {

        $brand = Brand::all();

        $filter = Filter::where('name', 'LIKE', '%'.$request->search.'%')->paginate(6);
        return view('home', compact('filter', 'brand', 'id'));
    }

    /*public function brand($id)
    {

        $brand = Brand::all();

        $filter = Filter::where('brand_id', $id)->paginate(6);
        return view('home', compact('filter', 'brand', 'id'));

    }

    public function category(Request $request)
    {

        $category = Category::all();

        $category = category::where('category_id', $id)->paginate(6);
        return view('home', compact('category'));

    }

    public function show($id)
    {
        $filter = Filter::findOrFail($id);
        return view('resultSearch', compact('filter'));
    }*/
  
}
