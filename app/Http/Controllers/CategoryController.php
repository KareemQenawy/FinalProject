<?php


namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Http\Requests\CategoryRequest;


class CategoryController extends Controller
{

    function index(){
        // $categories = Category::all();
        $categories = Category::get();
        // dd($categories); //die and dump
        return view('categories.index' , ["all_categories" => $categories]);
    }

    function show(Category $category){
    //    $category = Category::find($category); اول طريقه
    // $category = Category::where('id' , $category)->get(); تاني طريقه
    // $category = Category::where('id' , $category)->first(); تالت طريقه
    // $category = Category::whereId($category)->first(); رابع طريقه
    //   dd($category); //die and dump

      return view("categories.show" , ['category' =>$category]);
    }
    // function create(){

    // }
    function destroy(Category $category){
        // dd($category);
        $category->delete();
        // return view("categories.index");
        return redirect("/categories");
    }

    function create(){
       return view("categories.create");
    }

    function store(CategoryRequest $request){
        $data = $request->all();
        // $category = new Category();
        // $category->name = $data['name'];
        // $category->price = $data['name'];
        // $category->djh = $data['name'];
        // $category->save();
        // $category->Desc = $data['desc'];
        // $category->image = $data['image'];
        // $category->price = $data['price'];

        //mass assignment
        $category = Category::create($data);
        return redirect("categories");

    }

    function edit(Category $category){
       return view("categories.edit" ,
       ["category" => $category]);
    }
}
