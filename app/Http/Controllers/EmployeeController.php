<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use App\Http\Requests;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees = DB::table('employees')
                    ->orderBy('EmployeeID', 'asc')
                    ->paginate(5);
        return view('karyawan.index', compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('karyawan.create');
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
                'LastName'          => 'required|alpha|max:20',
                'FirstName'         => 'required|alpha|max:10',
                'Title'             => 'required|alpha|max:30',
                'TitleOfCourtesy'   => 'required|alpha|max:25',
                'BirthDate'         => 'required',
                'HireDate'          => 'required',
                'Address'           => 'required|max:60',
                'City'              => 'required|alpha|max:15',
                'Region'            => 'required|alpha|max:15',
                'PostalCode'        => 'required|numeric',
                'Country'           => 'required|alpha|max:15',
                'HomePhone'         => 'required|numeric',
                'Extension'         => 'required|numeric',
                'Notes'             => 'required',
                'ReportsTo'         => 'required|numeric'
            ]);
            $id = DB::table('employees')->insertGetId([
                'LastName'          => $request->input('LastName'),
                'FirstName'         => $request->input('FirstName'),
                'Title'             => $request->input('Title'),
                'TitleOfCourtesy'   => $request->input('TitleOfCourtesy'),
                'BirthDate'         => $request->input('BirthDate'),
                'HireDate'          => $request->input('HireDate'),
                'Address'           => $request->input('Address'),
                'City'              => $request->input('City'),
                'Region'            => $request->input('Region'),
                'PostalCode'        => $request->input('PostalCode'),
                'Country'           => $request->input('Country'),
                'HomePhone'         => $request->input('HomePhone'),
                'Extension'         => $request->input('Extension'),
                'Notes'             => $request->input('Notes'),
                'ReportsTo'         => $request->input('ReportsTo')
            ]);

            if ($id > 0) {
                return redirect('employee')->with('pesan_sukses', 'Data karyawan baru berhasil disimpan.');
            }
        }
        catch (Exception $e) {
            return redirect('employee')->with('pesan_gagal', $e->getMessage());
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
        $employee = DB::table('employees')->where('EmployeeID', $id)->first();

        return view('karyawan.show', compact('employee'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $employee = DB::table('employees')->where('EmployeeID', $id)->first();

        return view('karyawan.edit', compact('employee'));
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
        DB::table('employees')
        ->where('EmployeeID', $id)
        ->update([
          'LastName'          => $request->input('LastName'),
          'FirstName'         => $request->input('FirstName'),
          'Title'             => $request->input('Title'),
          'TitleOfCourtesy'   => $request->input('TitleOfCourtesy'),
          'BirthDate'         => $request->input('BirthDate'),
          'HireDate'          => $request->input('HireDate'),
          'Address'           => $request->input('Address'),
          'City'              => $request->input('City'),
          'Region'            => $request->input('Region'),
          'PostalCode'        => $request->input('PostalCode'),
          'Country'           => $request->input('Country'),
          'HomePhone'         => $request->input('HomePhone'),
          'Extension'         => $request->input('Extension'),
          'Notes'             => $request->input('Notes'),
          'ReportsTo'         => $request->input('ReportsTo')
            ]);

        return redirect('employee')->with('pesan_sukses', 'Data karyawan berhasil diubah.');
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
            DB::table('employees')->where('EmployeeID', '=', $id)->delete();

            return redirect('employee')->with('pesan_sukses', 'Data karyawan berhasil dihapus.');
        }
        catch (Exception $e) {
            return redirect('employee')->with('pesan_gagal', $e->getMessage());
        }
    }
}
