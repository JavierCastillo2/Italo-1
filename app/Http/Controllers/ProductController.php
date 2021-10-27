<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(Request $comapnies_id){
        $products = Product::paginate(12);
        return view('Products.Products',compact('products'));
    }
    public function create(){
        return view('Products.create');
    }
    public function show($id){
        $product = Product::find($id);
        return view('Products.show',compact('product'));
    }
    public function store(Request $request)
    {
        $filename='';
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extention;
            $file->move('uploads/products/',$filename);
        }
        $product = Product::create([

            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'precio' => $request->input('precio'),
            'image' => $filename,
            'companies_id' => $request->input('companies_id')
        ]);
        return redirect('products')->with('status', 'Se ha creado correctamente');
    }
    public function destroy($id){
        $product = Product::find($id)->delete();
        return redirect('products')->with('delete','Se ha eliminado correctamente :v');
    }
    public function edit($id){
        $product = Product::find($id);
        return view('products.editar',compact('product'));
    }
    public function update(Request $request, $id){
        $product =Product::find($id)->update([
            'name' => $request->input('name'),
            'description'=> $request->input('description'),
            'precio'=> $request->input('precio'),
            'image'=> $request->input('image'),
        ]);
        return redirect('products')->with('update','Se ha actualizado correctamente :)');
    }
}
