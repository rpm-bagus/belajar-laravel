<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
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
        $suppliers = DB::table('suppliers')->get();

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
            $this->validate($request, [
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
            $id = DB::table('suppliers')->insertGetId([
                'CompanyName'    => $request->input('CompanyName'),
                'ContactName'    => $request->input('ContactName'),
                'ContactTitle'   => $request->input('ContactTitle'),
                'Address'        => $request->input('Address'),
                'City'           => $request->input('City'),
                'Region'         => $request->input('Region'),
                'PostalCode'     => $request->input('PostalCode'),
                'Country'        => $request->input('Country'),
                'Phone'          => $request->input('Phone'),
                'Fax'            => $request->input('Fax'),
                'HomePage'       => $request->input('HomePage')
            ]);

            if ($id > 0) {
                return redirect('supplier')->with('pesan_sukses', 'Data pemasok baru berhasil disimpan.');
            }
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
        $supplier = DB::table('suppliers')->where('SupplierID', $id)->first();

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
        $supplier = DB::table('suppliers')->where('SupplierID', $id)->first();

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
        DB::table('suppliers')
        ->where('SupplierID', $id)
        ->update([
              'CompanyName'    => $request->input('CompanyName'),
              'ContactName'    => $request->input('ContactName'),
              'ContactTitle'   => $request->input('ContactTitle'),
              'Address'        => $request->input('Address'),
              'City'           => $request->input('City'),
              'Region'         => $request->input('Region'),
              'PostalCode'     => $request->input('PostalCode'),
              'Country'        => $request->input('Country'),
              'Phone'          => $request->input('Phone'),
              'Fax'            => $request->input('Fax'),
              'HomePage'       => $request->input('HomePage')
            ]);

        return redirect('supplier')->with('pesan_sukses', 'Data pemasok berhasil diubah.');
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
            DB::table('suppliers')->where('SupplierID', '=', $id)->delete();

            return redirect('supplier')->with('pesan_sukses', 'Data pemasok berhasil dihapus.');
        }
        catch (Exception $e) {
            return redirect('supplier')->with('pesan_gagal', $e->getMessage());
        }
    }
}
