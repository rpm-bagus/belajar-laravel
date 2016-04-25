<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use App\Http\Requests;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = DB::table('categories')->get();
        return view('kategori.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kategori.create');
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
            $id = DB::table('categories')->insertGetId([
                'CategoryName'  => $request->input('CategoryName'),
                'Description'   => $request->input('Description')
            ]);

            if ($id > 0) {
                return redirect('category')->with('pesan_sukses', 'Data kategori baru berhasil disimpan.');
            }
        }
        catch (Exception $e) {
            return redirect('category')->with('pesan_gagal', $e->getMessage());
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
        $category = DB::table('categories')->where('CategoryID', $id)->first();
        return view('kategori.edit', compact('category'));
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
        DB::table('categories')
        ->where('CategoryID', $id)
        ->update([
                'CategoryName'  => $request->input('CategoryName'),
                'Description'   => $request->input('Description')
            ]);
        return redirect('category')->with('pesan_sukses', 'Data kategori berhasil diubah.');
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
        DB::table('categories')->where('CategoryID', '=', $id)->delete();

        return redirect('category')->with('pesan_sukses', 'Data kategori berhasil dihapus.');
        }
        catch (Exception $e) {
            return redirect('category')->with('pesan_gagal', $e->getMessage());
        }
    }
}
