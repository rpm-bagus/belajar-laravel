<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Validator;

use App\Customer;
use App\Http\Requests;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customers = Customer::orderBy('CustomerID', 'asc')->paginate(10);
        return view('pelanggan.index', compact('customers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pelanggan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'CustomerID'     => 'required|unique:customers|alpha|max:5',
                'CompanyName'    => 'required|alpha|max:40',
                'ContactName'    => 'required|alpha|max:30',
                'ContactTitle'   => 'required|alpha|max:30',
                'Address'        => 'required|max:60',
                'City'           => 'required|alpha|max:15',
                'Region'         => 'required|alpha|max:15',
                'PostalCode'     => 'required|numeric',
                'Country'        => 'required|alpha|max:15',
                'Phone'          => 'required|numeric',
                'Fax'            => 'required|numeric'
            ]);
            if ($validator->fails()) {
                return redirect('customer/create')->withErrors($validator)->withInput();
            }
            Customer::create($request->all());
            return redirect('customer')->with('pesan_sukses', 'Data pelanggan baru berhasil disimpan.');
        }
        catch (Exception $e) {
            return redirect('customer')->with('pesan_gagal', $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $customer = Customer::find($id);
        return view('pelanggan.show', compact('customer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $customer = Customer::where('CustomerID', $id)->first();
        return view('pelanggan.edit', compact('customer'));
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
        try {
            $validator = Validator::make($request->all(), [
                'CompanyName'    => 'required|unique:customers,companyname,'.$id.',customerid|alpha|max:40',
                'ContactName'    => 'required|alpha|max:30',
                'ContactTitle'   => 'required|alpha|max:30',
                'Address'        => 'required|max:60',
                'City'           => 'required|alpha|max:15',
                'Region'         => 'required|alpha|max:15',
                'PostalCode'     => 'required|numeric',
                'Country'        => 'required|alpha|max:15',
                'Phone'          => 'required|numeric',
                'Fax'            => 'required|numeric'
            ]);
            if ($validator->fails()) {
                return redirect('customer/'.$id.'/edit')->withErrors($validator)->withInput();
            }
            Customer::where('CustomerID', $id)->update($request->except('_method'));
            return redirect('customer')->with('pesan_sukses', 'Data pelanggan berhasil diubah.');
        }
        catch (\Exception $e) {
            return redirect('customer')->with('pesan_gagal', $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            Customer::Where('CustomerID', $id)->delete();
            return redirect('customer')->with('pesan_sukses', 'Data pelanggan berhasil dihapus.');
        }
        catch (\Exception $e) {
            return redirect('customer')->with('pesan_gagal', $e->getMessage());
        }
    }
}
