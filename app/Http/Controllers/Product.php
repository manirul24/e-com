<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Product extends Controller
{

   
    private  $categories;
    public function __construct()
    {
        $this->categories = DB::table('categories')->get();
       
    }


    public function CatShow(){
      
     // $result= DB::table('categories')->selectRaw('categoryName','categoryImg')->get();

      $data= DB::table('categories')->get();

      //$categories= DB::table('categories')->get();

      //dd($categories);

       // return view('/welcome',$result);

    return view('welcome', compact('data'));
        
    }

    public function ProductList(Request $request){
      
     // $result= DB::table('categories')->selectRaw('categoryName','categoryImg')->get();
    $catId = $request->id;
      $data= DB::table('products')->where('category_id','=',$request->id)->latest()->orderBy('id')->paginate(8);
       // return $data;

 return view('/product', compact('data'));
        
    }

    
    public function ProductShow(Request $request){
      
     // $result= DB::table('categories')->selectRaw('categoryName','categoryImg')->get();
    $catId = $request->id;

        $data = DB::table('products')
            ->leftJoin('product_details', 'product_details.product_id', '=', 'products.id')
            ->select('title','short_des','price','discount','discount_price','image','products.id','star','stock' )
             ->where('products.id','=', $request->id)
            ->get();

    //return $data;

    return view('/product-details', compact('data'));
        
    }


}
