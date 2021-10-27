<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Compani;

class CompaniesController extends Controller
{
    public function index(){
        $companies = Compani::paginate(12);
        return view('companies.companies',compact('companies'));
    }
    public function create(){
        return view('companies.create');
    }
    public function show($id){
        $compani = Compani::find($id);
        return view('companies.show',compact('compani'));
    }
    public function store(Request $request){
        $compani =Compani::create([
            'name' => $request->input('name'),
            'nit'=> $request->input('nit'),
        ]);
        return redirect('companies')->with('create','Se ha creado correctamente el registro :v');
    }
    public function destroy($id){
        $compani = Compani::find($id)->delete();
        return redirect('companies')->with('delete','Se ha eliminado correctamente :v');
    }
    public function edit($id){
        $compani = Compani::find($id);
        return view('companies.edit',compact('compani'));
    }
    public function update(Request $request, $id){
        $compani =Compani::find($id)->update([
            'name' => $request->input('name'),
            'nit'=> $request->input('nit'),
        ]);
        return redirect('companies')->with('update','Se ha actualizado correctamente :)');
    }
}
