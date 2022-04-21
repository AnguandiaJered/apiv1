<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $custe = Customer::All();
        // $custe=Customer::orderByDesc('id')->get();
        // return view('customers',compact('custe'));
        return $custe;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $custe = new Customer();

        $custe->name = $request->name;
        $custe->phone = $request->phone;
        $custe->rate = $request->rate;
        $custe->email = $request->email;
        $custe->save();
        return \redirect()->route('index');
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
        $custe=Customer::find($id);
        return view('customers',compact('custe'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $custe=Customer::find($request->id);
        $custe->name=$request->name;
        $custe->phone=$request->phone;
        $custe->rate=$request->rate;
        $custe->email=$request->email;
        $custe->save();
        return view('customers',compact('custe'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       Customer::find($id)->delete();
       $custe = Customer::All();
        return view('customers',compact('custe')); 
    }
}
