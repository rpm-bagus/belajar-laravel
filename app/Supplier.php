<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $primaryKey = 'SupplierID';

    protected $fillable = [
    	'CompanyName',
    	'ContactName',
    	'ContactTitle',
    	'Address',
    	'City',
    	'Region',
    	'PostalCode',
    	'Country',
    	'Phone',
    	'Fax',
    	'HomePage'
    ];

    protected function products(){
        return $this->hasMany(Product::class, 'SupplierID');
    }
}
