<?php

namespace App\Http\Controllers;
use App\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        $customers=Customer::all();
        return view('pelanggan.index', compact('customers'));
// dd($customers);
    }
 public function create()
 {
     return view('pelanggan.create');
 }

 public function store(Request $request)
 {
// dd($request->all());
Customer::create($request->all());
return redirect('customer');
 }

public function destroy($id)
{
    $customer=Customer::where('id',$id)->first();
    $customer->delete();
    return redirect('customer');
}



public function edit(Customer $customer)
{
    return view('pelanggan.edit', compact('customer'));
}
}