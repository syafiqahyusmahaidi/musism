<?php

namespace App\Http\Controllers;
use App\Product;
use App\Brand;
use App\Category;
use DB;

use Request;


class CheckboxController extends Controller
{
    
    protected $request;

    public function __construct(Request $request) {
        $this->request = $request;
    }

    
    /**
     * Store a newly created resource in storage.
     *
     * @param  Illuminate\Http\Request  $request
     * @return Response
     */

    public function checkbox(Request $request,Product $products, Brand $brand, Category $category){

        $products = Product::all();
        $brand_id = $brand->brand_id;
        $category_id = $category->category_id;
        $brand = Brand::all();
        $category = Category::all();

        if(Request::get('filterbrand')){
            $checked = $_GET['filterbrand'];
            $brand = Brand::whereIn('vendor', $checked)->get();
        }
        else{
            $products = Product::where('vendor', $brand_id)->get();
        }

        return view('resultSearch')
            ->with('products',$products)
            ->with('brand',$brand)
            ->with('category',$category)
        ;
    }
}
