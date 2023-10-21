<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dataguru extends Model
{
    use HasFactory;
    protected $table='dt_guru'; 
    protected $primaryKey='id';
    public $timestamps = false;
    protected $fillable=array('nama','nip','prodi','no_hp','alamat');

    public function antrianta(){
        return $this->hasMany('App\Models\antrianta','id');
        
    }
}
