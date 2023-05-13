<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
// use Illuminate\Support\Facades\Hash;
use Hash;
use Illuminate\Support\Facades\Hash as FacadesHash;

class UserController extends Controller
{
    function create(){
     return view("users.adduser");
    }

    function store(Request $request){
    $data = $request->all();
    $data['password'] = Hash::make($request->password);
    if($request->hasFile("image"))
    {
     $image = $request->file("image");
     $imageName = time() . "_" . uniqid() . "_user." .$image->getClientOriginalExtension();
     $destination = public_path("uploads/");
     $image->move($destination , $imageName);
     $data['image'] = "uploads/".$imageName;
    }else{
     $data['image'] = "default/user.png";
    }
    $user = User::create($data);
    return $user ? redirect("/") : redirect()->back();
 }
}
