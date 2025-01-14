<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CountryModel extends Model
{
    use HasFactory;

    protected $table = "countries";

    public function states()
    {
        return $this->hasMany(StateModel::class,'country_id','id');
    }
}
