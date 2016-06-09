<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $primaryKey = 'ProductID';

    protected $fillable = [
    	'ProductName',
    	'QuantityPerUnit',
    	'UnitPrice',
    	'UnitsInStock',
    	'UnitsOnOrder',
    	'ReorderLevel',
    	'Discontinued'
    ];

    public function category(){
        return $this->belongsTo(Category::class, 'CategoryID');
    }

    public function supplier(){
        return $this->belongsTo(Supplier::class, 'SupplierID');
    }
}
