<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';
    protected $primarykey = 'id';
    protected $fillable = ['name','description','precio','image','companies_id'];

    public function company(){
        return $this->belongsTo('App\Models\Compani', 'companies_id');
    }

}
