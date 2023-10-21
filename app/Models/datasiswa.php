<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class datasiswa extends Model
{
    use HasFactory;
    protected $table='dt_siswa'; 
    protected $primaryKey='id';
    public $timestamps = false;
    protected $fillable=array('nama','nis','prodi','alamat');
    public function antrianta(){
        return $this->hasMany('App\Models\antrianta','id');
        
    }
}
