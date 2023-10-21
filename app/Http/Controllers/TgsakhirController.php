<?php

namespace App\Http\Controllers;

use Request;
use App\Models\tgsakhir;
use Storage;
use Str;
use App\Models\dataguru;
use App\Models\datasiswa;
use App\Models\antrianta;
class TgsakhirController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['dataguru'] = dataguru::get();
        $data['datasiswa'] = datasiswa::get();
        $data['antrianta'] = antrianta::where('id_user',Auth()->User()->id)->get();
        return view('tgsakhir.create',$data);
    }
    public function uploadImage($name){
        //
        if($name){
            $file = $name;
            $ext = $file->getClientOriginalExtension();
            $filesize = $file->getSize() / 1024;
            $file_path = '1/'.date('Y-m');

            //create directory monthly
            Storage::makeDirectory('public/upload/'.$file_path);
            $filename = Str::random().'.'.$ext;
            if(Storage::putFileAs('public/upload/'.$file_path,$file, $filename)){
                return 'upload/'.$file_path.'/'.$filename;
            }else{
                return 'null 1';
            }
        }else{
            return 'null 2';
        
        }
    }
    public function uploadDokumen($name){
        //
        if($name){
            $file = $name;
            $ext = $file->getClientOriginalExtension();
            $filesize = $file->getSize() / 1024;
            $file_path = '1/'.date('Y-m');

            //create directory monthly
            Storage::makeDirectory('public/upload/'.$file_path);
            $filename = Str::random().'.'.$ext;
            if(Storage::putFileAs('public/upload/'.$file_path,$file, $filename)){
                return 'upload/'.$file_path.'/'.$filename;
            }else{
                return 'null 1';
            }
        }else{
            return 'null 2';
        
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
     //  
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['penjualan']= detailpenjualan::with('penjualan','Barang')->where('id_penjualan',$id_penjualan)->get();
        return view('penjualan.show',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['tgsakhir']= tgsakhir::find($id);
        return view('tgsakhir.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $tgsakhir= tgsakhir::find($id);
        $tgsakhir->fill($request->all());
        $tgsakhir->update();
        return redirect('tgsakhir');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
