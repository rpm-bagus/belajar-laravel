<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $primaryKey = 'EmployeeID';

    protected $fillable = [
    	'LastName',
    	'FirstName',
    	'Title',
    	'TitleOfCourtesy',
    	'BirthDate',
    	'HireDate',
    	'Address',
    	'City',
    	'Region',
    	'PostalCode',
    	'Country',
    	'HomePhone',
    	'Extension',
    	'Notes',
    	'ReportsTo'
    ];
}
