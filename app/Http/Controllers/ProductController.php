<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class ProductController extends Controller
{
    /*
      * @it returns all products in database
    */
    public function index(){
        //logic
        $products = Product::all();
        return view("Products.index" , ['products' => $products]);
    }
    function create(){
        $categories = Category::get();
        return view("Products.create" , ["categories"=>$categories ]);
    }
    function store(Request $req){
        // $product = Product::create($req->all());
        $data = $req->all();
       if($req->hasFile("image"))
       {
        //hat el sore
        $image = $req->file("image");
        // e3mlha rename time , uniqueid _  . png
        $imageName = time() . "_" . uniqid() . "_product." .$image->getClientOriginalExtension();
        $destination = public_path("uploads/");
        $image->move($destination , $imageName);
        // save el image fl uploads folder
        // save in db
        // dd($imageName);
        $data['image'] = "uploads/".$imageName;
        // return "file exsit";
       }else{
        $data['image'] = "default/product.png";
        // return "file doesnt exist";
       }
       $product =  Product::create($data);
       return $product ? redirect("products") : redirect()->back();
    }
    function show( Product $product){
        // dd($product);
        return view("Products.show" , ['product' => $product]);
    }
}
