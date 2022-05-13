<?php

namespace App\Http\Controllers;
use App\Soal;
use Illuminate\Http\Request;

class SoalController extends Controller
{
    public function index()
    {
        $soals=Soal::all();
        return view('pelanggan.index', compact('soals'));
// dd($soal);
    }
 public function create()
 {
     return view('pelanggan.create');
 }

 public function store(Request $request)
 {
// dd($request->all());
// Soal::create($request->all());
// return redirect('soal');
$data= Soal::create($request->all());
return redirect('soal');
 }

public function destroy($id)
{
    $soal=Soal::where('id',$id)->first();
    $soal->delete();
    return redirect('soal');
}


public function edit($id)
   {
      $soal = soal::find($id);

      return view('pelanggan.edit',  compact('soal'));
   }
   public function update(Request $request, Soal $soal )
   {
    $soal->update($request->all());
    return redirect('soal');

   }
}