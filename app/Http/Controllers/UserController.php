<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    
    public function index()
    {
        $users = User::all();
        return $users;
    }

   //  public function store(Request $request)
   //  {
   //     $product = new Product();
   //     $product->description = $request->description;
   //     $product->price = $request->price;
   //     $product->stock = $request->stock;

   //     $product->save();
   //  }

   //  public function show($id)
   //  {
   //      $product = Product::find($id);
   //      return $product;
   //  }

   //  public function update(Request $request, $id)
   //  {
   //      $product = Product::findOrFail($request->id);
   //      $product->description = $request->description;
   //      $product->price = $request->price;
   //      $product->stock = $request->stock;

   //      $product->save();
   //      return $product;
   //  }
    
   //  public function destroy($id)
   //  {
   //     $product = Product::destroy($id);
   //     return $product;
   //  }
}
