<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Subcategory;
use App\Item;
use App\Brand;

class PageController extends Controller
{
    public function homefun($value='')
    {
        // $route = Route::current();
        // //dd($route);
        $categories=Category::take(6)->get();
         $subcategories=Subcategory::all();
         $discountItems=Item::where('discount','>',0)->take(6)->get(); 
         $brands=Brand::take(6)->get();
    	return view('frontend.home',compact('categories','subcategories','discountItems','brands'));
    }
    public function brandfun($id)
   {
         $subcategories=Subcategory::all();
         $items=Item::all(); 
        $categories=Category::all();
        $brands=Brand::find($id);
    	return view('frontend.brand',compact('categories','subcategories','items','brands'));
    }

     public function categoryfun($id)
   {
         $subcategories=Subcategory::all();
         $items=Item::all(); 
        $category=Category::find($id);
        $brands=Brand::all();
        return view('frontend.brand',compact('category','subcategories','items','brands'));
    }


    public function itemdetailfun($id)
    {
        $subcategories=Subcategory::all();
         $items=Item::find($id); 
        $categories=Category::all();
    	return view('frontend.itemdetail',compact('items','categories','subcategories'));
    }


    public function loginfun($value='')
    {
        $subcategories=Subcategory::all();
         $items=Item::all(); 
        $categories=Category::all();
        return view('frontend.login',compact('categories','subcategories','items'));
    }


     public function promotionfun($value='')
    {
        $categories=Category::all();
         $subcategories=Subcategory::all();
         $items=Item::all(); 
        return view('frontend.promotion',compact('categories','subcategories','items'));
    }


     public function registerfun($value='')
    {
        $subcategories=Subcategory::all();
         $items=Item::all(); 
        $categories=Category::all();
        return view('frontend.register',compact('categories','subcategories','items'));
    }


     public function shoppingcartfun($value='')
    {
        $categories=Category::all();
         $subcategories=Subcategory::all();
         
         $items=Item::all(); 
        return view('frontend.shoppingcart',compact('categories','subcategories','items'));
    }


    public function subcategoryfun($id)
    {
        $subcategories=Subcategory::find($id);
         $subcategories->setRelation('items',$subcategories->items()->paginate(3));
         $items=Item::all(); 
        $categories=Category::all();
        return view('frontend.subcategory',compact('categories','subcategories','items'));
    }
     
    
    // public function testingfun($id,$name)
    // {
    //     return $id.'/'.$name;
    //    return view('testing');
    // }
}
