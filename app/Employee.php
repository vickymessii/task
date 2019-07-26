<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $table ='employees';
    protected $fillable = [
        'first_name', 'last_name', 'email', 'phone', 'company_id'
    ];
   public function company()
   {
       return $this->hasOne('App\Company', 'id', 'company_id');
   }
}
