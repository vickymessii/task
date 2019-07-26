<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $table ='companies';
    protected $fillable = [
        'name', 'email', 'logo', 'website'
    ];

    public function setLogoAttribute($logo)
    {
        if ($logo != null && $logo != '') {
            $file = request()->file('logo');
            $md5Name = md5_file(request()->file('logo')->getRealPath());
            $guessExtension = request()->file('logo')->guessExtension();
            $name = request()->file('logo')->storeAs('toPath',$md5Name.'.'.$guessExtension, ['disk' => 'public']);
           // $name = $file->getClientOriginalName();
            $this->attributes['logo'] = $name;
        }
    }
}
