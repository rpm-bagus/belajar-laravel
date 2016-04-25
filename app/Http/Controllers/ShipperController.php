<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use App\Http\Requests;

class ShipperController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $shippers = DB::table('shippers')->get();

        return view('kurir.index', compact('shippers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kurir.create');
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
            $id = DB::table('shippers')->insertGetId([
              'CompanyName'  => $request->input('CompanyName'),
              'Phone'        => $request->input('Phone')
            ]);

            if ($id > 0) {
                return redirect('shipper')->with('pesan_sukses', 'Data kurir baru berhasil disimpan.');
            }
        }
        catch (Exception $e) {
            return redirect('shipper')->with('pesan_gagal', $e->getMessage());
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
        $shipper = DB::table('shippers')->where('ShipperID', $id)->first();

        return view('kurir.show', compact('shipper'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $shipper = DB::table('shippers')->where('ShipperID', $id)->first();

        return view('kurir.edit', compact('shipper'));
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
        DB::table('shippers')
        ->where('ShipperID', $id)
        ->update([
              'CompanyName'  => $request->input('CompanyName'),
              'Phone'        => $request->input('Phone')
            ]);

        return redirect('shipper')->with('pesan_sukses', 'Data kurir berhasil diubah.');
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
            DB::table('shippers')->where('ShipperID', '=', $id)->delete();

            return redirect('shipper')->with('pesan_sukses', 'Data kurir berhasil dihapus.');
        }
        catch (Exception $e) {
            return redirect('shipper')->with('pesan_gagal', $e->getMessage());
        }
    }
}
