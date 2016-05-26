<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /**
    * Isi dengan nama tabelnya,
    * HANYA JIKA nama tabelnya bukan bentuk plural dari model ini
    * protected $table = 'm_kategori';
    */

    /**
    * Isi dengan nama kolom PK-nya,
    * HANYA JIKA nama kolom PK-nya bukan "id"
    */
    protected $primaryKey = 'CategoryID';

    /**
    * Isi dengan nama kolom yang nanti akan diisi oleh end-user,
    * kolom-kolom yang diisi otomatis oleh DB ataupun laravel TIDAK perlu
    * disebutkan.
    */
    protected $fillable = [
    	'CategoryName',
    	'Description'
    ];
}
