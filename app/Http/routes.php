<?php

use Illuminate\Http\Request;

Route::get('/', function () {
  return view('welcome');
});

Route::get('about', function() {
	return View::make('pages.about');
});

Route::get('contact', function() {
	return view('pages.contact');
});

Route::get('master', function() {
  return View::make('master');
});

Route::get('friends', 'FriendController@all');

/* ----------------------------- DATABASE START ----------------------------- */

/* --------------------------------- */
/* ----------- UTS START ----------- */
/* --------------------------------- */

/************************************************************************************************/
/****************************************** CATEGORIES ******************************************/

// Menampilkan semua data
Route::get('category', function() {
    $categories = DB::table('categories')->get();

    return view('kategori.index', compact('categories'));
});

// Menampilkan form untuk tambah data
Route::get('category/create', function() {
    return view('kategori.create');
});

// Memproses tambah data
Route::post('category', function(Request $request) {
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
});

// Menampilkan form untuk ubah data
Route::get('category/{id}/edit', function($id) {
    $category = DB::table('categories')->where('CategoryID', $id)->first();

    return view('kategori.edit', compact('category'));
});

// Memproses ubah data
Route::patch('category/{id}', function($id, Request $request) {
    DB::table('categories')
        ->where('CategoryID', $id)
        ->update([
                'CategoryName'  => $request->input('CategoryName'),
                'Description'   => $request->input('Description')
            ]);

    return redirect('category')->with('pesan_sukses', 'Data kategori berhasil diubah.');
});

// Memproses hapus data
Route::delete('/category/{id}', function($id) {
    try {
        DB::table('categories')->where('CategoryID', '=', $id)->delete();

        return redirect('category')->with('pesan_sukses', 'Data kategori berhasil dihapus.');
    }
    catch (Exception $e) {
        return redirect('category')->with('pesan_gagal', $e->getMessage());
    }
});

/************************************************************************************************/
/****************************************** PRODUCTS ********************************************/

// Menampilkan semua data
Route::get('product', function() {
    $products = DB::table('products')
                    ->leftJoin('categories', 'categories.CategoryID', '=', 'products.CategoryID')
                    ->get();

    return view('produk.index', compact('products'));
});

// Menampilkan detil data tertentu
Route::get('product/{id}/show', function($id) {
    $product = DB::table('products')
                    ->leftJoin('categories', 'categories.CategoryID', '=', 'products.CategoryID')
                    ->leftJoin('suppliers', 'suppliers.SupplierID', '=', 'products.SupplierID')
                    ->where('ProductID', $id)->first();

    return view('produk.show', compact('product'));
});

// Menampilkan form untuk tambah data
Route::get('product/create', function() {
    $categories = DB::table('categories')->get();
    $suppliers  = DB::table('suppliers')->get();

    return view('produk.create', compact('categories', 'suppliers'));
});

// Memproses tambah data
Route::post('product', function(Request $request) {
    try {
        $id = DB::table('products')->insertGetId([
            'ProductName'       => $request->input('ProductName'),
            'SupplierID'        => $request->input('SupplierID'),
            'CategoryID'        => $request->input('CategoryID'),
            'QuantityPerUnit'   => $request->input('QuantityPerUnit'),
            'UnitPrice'         => $request->input('UnitPrice'),
            'UnitsInStock'      => $request->input('UnitsInStock'),
            'UnitsOnOrder'      => $request->input('UnitsOnOrder'),
            'ReorderLevel'      => $request->input('ReorderLevel'),
            'Discontinued'      => $request->input('Discontinued') ? DB::raw(1) : DB::raw(0)
        ]);

        if ($id > 0) {
            return redirect('product')->with('pesan_sukses', 'Data produk baru berhasil disimpan.');
        }
    }
    catch (Exception $e) {
        return redirect('product/create')->with('pesan_gagal', $e->getMessage());
    }
});

// Menampilkan form untuk ubah data
Route::get('product/{id}/edit', function($id) {
    $product    = DB::table('products')->where('ProductID', $id)->first();
    $categories = DB::table('categories')->get();
    $suppliers  = DB::table('suppliers')->get();

    return view('produk.edit', compact('product', 'categories', 'suppliers'));
});

// Memproses ubah data
Route::patch('product/{id}', function($id, Request $request) {
    DB::table('products')
        ->where('ProductID', $id)
        ->update([
                'ProductName'       => $request->input('ProductName'),
                'SupplierID'        => $request->input('SupplierID'),
                'CategoryID'        => $request->input('CategoryID'),
                'QuantityPerUnit'   => $request->input('QuantityPerUnit'),
                'UnitPrice'         => $request->input('UnitPrice'),
                'UnitsInStock'      => $request->input('UnitsInStock'),
                'UnitsOnOrder'      => $request->input('UnitsOnOrder'),
                'ReorderLevel'      => $request->input('ReorderLevel'),
                'Discontinued'      => $request->input('Discontinued') ? DB::raw(1) : DB::raw(0)
            ]);

    return redirect('product')->with('pesan_sukses', 'Data produk berhasil diubah.');
});

// Memproses hapus data
Route::delete('/product/{id}', function($id) {
    try {
        DB::table('products')->where('ProductID', '=', $id)->delete();

        return redirect('product')->with('pesan_sukses', 'Data produk berhasil dihapus.');
    }
    catch(Exception $e) {
        return redirect('product')->with('pesan_gagal', $e->getMessage());
    }
});

/************************************************************************************************/
/****************************************** EMPLOYEES *******************************************/

// Menampilkan semua data
Route::get('employee', function() {
    $employees = DB::table('employees')->get();

    return view('karyawan.index', compact('employees'));
});

// Menampilkan detil data tertentu
Route::get('employee/{id}/show', function($id) {
    $employee = DB::table('employees')->where('EmployeeID', $id)->first();

    return view('karyawan.show', compact('employee'));
});

// Menampilkan form untuk tambah data
Route::get('employee/create', function() {
    return view('karyawan.create');
});

// Memproses tambah data
Route::post('employee', function(Request $request) {
    try {
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
});

// Menampilkan form untuk ubah data
Route::get('employee/{id}/edit', function($id) {
    $employee = DB::table('employees')->where('EmployeeID', $id)->first();

    return view('karyawan.edit', compact('employee'));
});

// Memproses ubah data
Route::patch('employee/{id}', function($id, Request $request) {
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
});

// Memproses hapus data
Route::delete('/employee/{id}', function($id) {
    try {
        DB::table('employees')->where('EmployeeID', '=', $id)->delete();

        return redirect('employee')->with('pesan_sukses', 'Data karyawan berhasil dihapus.');
    }
    catch (Exception $e) {
        return redirect('employee')->with('pesan_gagal', $e->getMessage());
    }
});

/************************************************************************************************/
/****************************************** SUPPLIERS *******************************************/

// Menampilkan semua data
Route::get('supplier', function() {
    $suppliers = DB::table('suppliers')->get();

    return view('pemasok.index', compact('suppliers'));
});

// Menampilkan detil data tertentu
Route::get('supplier/{id}/show', function($id) {
    $supplier = DB::table('suppliers')->where('SupplierID', $id)->first();

    return view('pemasok.show', compact('supplier'));
});

// Menampilkan form untuk tambah data
Route::get('supplier/create', function() {
    return view('pemasok.create');
});

// Memproses tambah data
Route::post('supplier', function(Request $request) {
    try {
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
});

// Menampilkan form untuk ubah data
Route::get('supplier/{id}/edit', function($id) {
    $supplier = DB::table('suppliers')->where('SupplierID', $id)->first();

    return view('pemasok.edit', compact('supplier'));
});

// Memproses ubah data
Route::patch('supplier/{id}', function($id, Request $request) {
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
});

// Memproses hapus data
Route::delete('/supplier/{id}', function($id) {
    try {
        DB::table('suppliers')->where('SupplierID', '=', $id)->delete();

        return redirect('supplier')->with('pesan_sukses', 'Data pemasok berhasil dihapus.');
    }
    catch (Exception $e) {
        return redirect('supplier')->with('pesan_gagal', $e->getMessage());
    }
});

/************************************************************************************************/
/****************************************** CUSTOMERS *******************************************/

// Menampilkan semua data
Route::get('customer', function() {
    $customers = DB::table('customers')->get();

    return view('pelanggan.index', compact('customers'));
});

// Menampilkan detil data tertentu
Route::get('customer/{id}/show', function($id) {
    $customer = DB::table('customers')->where('CustomerID', $id)->first();

    return view('pelanggan.show', compact('customer'));
});

// Menampilkan form untuk tambah data
Route::get('customer/create', function() {
    return view('pelanggan.create');
});

// Memproses tambah data
Route::post('customer', function(Request $request) {
    try {
        $id = DB::table('customers')->insert([
            'CustomerID'     => $request->input('CustomerID'),
            'CompanyName'    => $request->input('CompanyName'),
            'ContactName'    => $request->input('ContactName'),
            'ContactTitle'   => $request->input('ContactTitle'),
            'Address'        => $request->input('Address'),
            'City'           => $request->input('City'),
            'Region'         => $request->input('Region'),
            'PostalCode'     => $request->input('PostalCode'),
            'Country'        => $request->input('Country'),
            'Phone'          => $request->input('Phone'),
            'Fax'            => $request->input('Fax')
        ]);

        if ($id > 0) {
            return redirect('customer')->with('pesan_sukses', 'Data pelanggan baru berhasil disimpan.');
        }
    }
    catch (Exception $e) {
        return redirect('customer')->with('pesan_gagal', $e->getMessage());
    }
});

// Menampilkan form untuk ubah data
Route::get('customer/{id}/edit', function($id) {
    $customer = DB::table('customers')->where('CustomerID', $id)->first();

    return view('pelanggan.edit', compact('customer'));
});

// Memproses ubah data
Route::patch('customer/{id}', function($id, Request $request) {
    DB::table('customers')
        ->where('CustomerID', $id)
        ->update([
              'CustomerID'     => $request->input('CustomerID'),
              'CompanyName'    => $request->input('CompanyName'),
              'ContactName'    => $request->input('ContactName'),
              'ContactTitle'   => $request->input('ContactTitle'),
              'Address'        => $request->input('Address'),
              'City'           => $request->input('City'),
              'Region'         => $request->input('Region'),
              'PostalCode'     => $request->input('PostalCode'),
              'Country'        => $request->input('Country'),
              'Phone'          => $request->input('Phone'),
              'Fax'            => $request->input('Fax')
            ]);

    return redirect('customer')->with('pesan_sukses', 'Data pelanggan berhasil diubah.');
});

// Memproses hapus data
Route::delete('/customer/{id}', function($id) {
    try {
        DB::table('customers')->where('CustomerID', '=', $id)->delete();

        return redirect('customer')->with('pesan_sukses', 'Data pelanggan berhasil dihapus.');
    }
    catch (Exception $e) {
        return redirect('customer')->with('pesan_gagal', $e->getMessage());
    }
});

/************************************************************************************************/
/****************************************** SHIPPERS ********************************************/

// Menampilkan semua data
Route::get('shipper', function() {
    $shippers = DB::table('shippers')->get();

    return view('kurir.index', compact('shippers'));
});

// Menampilkan detil data tertentu
Route::get('shipper/{id}/show', function($id) {
    $shipper = DB::table('shippers')->where('ShipperID', $id)->first();

    return view('kurir.show', compact('shipper'));
});

// Menampilkan form untuk tambah data
Route::get('shipper/create', function() {
    return view('kurir.create');
});

// Memproses tambah data
Route::post('shipper', function(Request $request) {
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
});

// Menampilkan form untuk ubah data
Route::get('shipper/{id}/edit', function($id) {
    $shipper = DB::table('shippers')->where('ShipperID', $id)->first();

    return view('kurir.edit', compact('shipper'));
});

// Memproses ubah data
Route::patch('shipper/{id}', function($id, Request $request) {
    DB::table('shippers')
        ->where('ShipperID', $id)
        ->update([
              'CompanyName'  => $request->input('CompanyName'),
              'Phone'        => $request->input('Phone')
            ]);

    return redirect('shipper')->with('pesan_sukses', 'Data kurir berhasil diubah.');
});

// Memproses hapus data
Route::delete('/shipper/{id}', function($id) {
    try {
        DB::table('shippers')->where('ShipperID', '=', $id)->delete();

        return redirect('shipper')->with('pesan_sukses', 'Data kurir berhasil dihapus.');
    }
    catch (Exception $e) {
        return redirect('shipper')->with('pesan_gagal', $e->getMessage());
    }
});

/************************************************************************************************/
/****************************************** ORDERS **********************************************/

// Menampilkan semua data
Route::get('order', function() {
    $orders = DB::table('orders')
                    ->leftJoin('employees', 'employees.EmployeeID', '=', 'orders.EmployeeID')
                    ->leftJoin('customers', 'customers.CustomerID', '=', 'orders.CustomerID')
                    ->get();

    return view('pemesanan.index', compact('orders'));
});

// Menampilkan detil data tertentu
Route::get('order/{id}/show', function($id) {
    $order = DB::table('orders')
                ->leftJoin('employees', 'employees.EmployeeID', '=', 'orders.EmployeeID')
                ->leftJoin('customers', 'customers.CustomerID', '=', 'orders.CustomerID')
                // ->leftJoin('shippers', 'shippers.ShipperID', '=', 'orders.ShipVia')
                ->where('OrderID', $id)
                ->first();

    $order_details = DB::table('order_details')
                        ->leftJoin('products', 'products.ProductID', '=', 'order_details.ProductID')
                        ->where('OrderID', $id)
                        ->get();

    return view('pemesanan.show', compact('order', 'order_details'));
});
