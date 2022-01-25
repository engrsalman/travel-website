<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    
    protected $table = 'contacts';

    protected $primaryKey = 'id';

    protected $fillable = ['first_name','last_name','telephone','phone','email','address','city','state','zip_code','country','comment','consent'];
}
