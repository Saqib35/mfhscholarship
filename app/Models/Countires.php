<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Countires extends Model
{
    use HasFactory;
    protected $table = 'countries';

    public static function getCountries()
    {
        return Countries::get();
    }
  

}
