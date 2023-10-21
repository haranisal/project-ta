<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class antrianta extends Model
{
    use HasFactory;
    protected $table='antrian_laporan'; 
    protected $primaryKey='id';
    public $timestamps = false;
    protected $fillable=array('judul','guru_pembimbing','tgl_upload','author','prodi','thumbnail','nis','dokumen');

     public function datasiswa(){
    return $this->belongsTo('App\Models\datasiswa','id');
}
public function dataguru(){
    return $this->belongsTo('App\Models\dataguru','id');
}
}