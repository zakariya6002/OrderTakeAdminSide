<?php

namespace App\Http\Controllers\customer;

use App\Models\User;
use App\Models\Customer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cus = Customer::all();
        return view('admin.customer.index', compact('cus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cus = Customer::all();
        return view('admin.customer.backend.create', compact('cus'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Customer::create([
                'name'=> $request->name,
                'email'=> $request->email,
                'phone'=> $request->phone,
                'company_name'=> $request->company_name,
                'address'=> $request->address,
                'city'=> $request->city,
                'province'=> $request->province,

        ]);
        return redirect()->route('customers.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cus = Customer::find($id);

        return view('customer.backend.edit', compact('cus'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $cus = Customer::find($id);

        $cus -> update([
            'name'=> $request->name,
            'email'=> $request->email,
            'phone'=> $request->phone,
            'company_name'=> $request->company_name,
            'address'=> $request->address,
            'city'=> $request->city,
            'province'=> $request->province,
        ]);
        return redirect()->route('customers.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
