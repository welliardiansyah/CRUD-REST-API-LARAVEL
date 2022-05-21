<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\CustomerResource;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function index()
    {
      return CustomerResource::collection(Customer::all());
    }

    public function create()
    {
       //
    }

    public function store(Request $request)
    {
        $input = $request->all();

        $customer = Customer::create($input);

        return new CustomerResource($customer);
    }

    public function show($id)
    {
       //
    }

    public function edit($id)
    {
       //
    }

    public function update(Request $request, $id)
    {
        $customer = Customer::find($id);

        $customer->update($request->all());
 
        return new CustomerResource($customer);
    }

    public function destroy($id)
    {
        $customer = Customer::find($id);

        $customer->delete();
        
        return response()->json(null);
    }
}
