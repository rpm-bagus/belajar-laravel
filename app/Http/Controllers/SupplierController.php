<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Validator;

use App\Supplier;
use App\Http\Requests;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $suppliers = Supplier::orderBy('SupplierID', 'asc')->paginate(10);
        return view('pemasok.index', compact('suppliers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pemasok.create');
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
                'CompanyName'    => 'required|unique:suppliers|alpha|max:40',
                'ContactName'    => 'required|alpha|max:30',
                'ContactTitle'   => 'required|alpha|max:30',
                'Address'        => 'required|max:60',
                'City'           => 'required|alpha|max:15',
                'Region'         => 'required|alpha|max:15',
                'PostalCode'     => 'required|numeric',
                'Country'        => 'required|alpha|max:15',
                'Phone'          => 'required|numeric',
                'Fax'            => 'required|numeric',
                'HomePage'       => 'required'
            ]);
            if ($validator->fails()) {
                return redirect('supplier/create')->withErrors($validator)->withInput();
            }
            Supplier::create($request->all());
            return redirect('supplier')->with('pesan_sukses', 'Data pemasok baru berhasil disimpan.');
        }
        catch (Exception $e) {
            return redirect('supplier')->with('pesan_gagal', $e->getMessage());
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
        $supplier = Supplier::find($id);
        return view('pemasok.show', compact('supplier'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $supplier = Supplier::where('SupplierID', $id)->first();

        return view('pemasok.edit', compact('supplier'));
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
                'CompanyName'    => 'required|unique:suppliers,companyname,'.$id.',supplierid|alpha|max:40',
                'ContactName'    => 'required|alpha|max:30',
                'ContactTitle'   => 'required|alpha|max:30',
                'Address'        => 'required|max:60',
                'City'           => 'required|alpha|max:15',
                'Region'         => 'required|alpha|max:15',
                'PostalCode'     => 'required|numeric',
                'Country'        => 'required|alpha|max:15',
                'Phone'          => 'required|numeric',
                'Fax'            => 'required|numeric',
                'HomePage'       => 'required'
            ]);
            if ($validator->fails()) {
                return redirect('supplier/'.$id.'/edit')->withErrors($validator)->withInput();
            }
            Supplier::where('SupplierID', $id)->update($request->except('_method'));
            return redirect('supplier')->with('pesan_sukses', 'Data pemasok berhasil diubah.');
        }
        catch (\Exception $e) {
            return redirect('supplier')->with('pesan_gagal', $e->getMessage());
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
            Supplier::Where('SupplierID', $id)->delete();
            return redirect('supplier')->with('pesan_sukses', 'Data pemasok berhasil dihapus.');
        }
        catch (\Exception $e) {
            return redirect('supplier')->with('pesan_gagal', $e->getMessage());
        }
    }
}
