<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pengajuanjudul extends Model
{
    use HasFactory;
    protected $table='pengajuanjudul'; 
    protected $primaryKey='id';
    public $timestamps = false;
    protected $fillable=array('nama','nis','prodi','judul1','judul2','tanggal_pengajuan','status');
}
