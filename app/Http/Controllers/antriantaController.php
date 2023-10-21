<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\antrianta;
use Illuminate\Support\Facades\Validator;
use Storage;
use Str;
use App\Models\datasiswa;
use App\Models\dataguru;
use lluminate\Http\UploadedFile;

class antriantaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['antrianta']= antrianta::with('datasiswa','dataguru')->get();
        return view('antrianta.index',$data); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    
    public function store(Request $request)
    {
            //
            $this->validate($request, [
                'dokumen' => 'mimes:doc,docx,pdf,xls,xlxs,ppt,pptx',
                'thumbnail' => 'mimes:jpg,jpeg,png'
            ]
            );
            $dokumen =$request->file('dokumen');
            $nama_dokumen= 'FT'.date('Ymdhis').'.'.$request->file('dokumen')->getClientOriginalExtension();
            $dokumen->move('storage/',$nama_dokumen);
       $file = $request->file('thumbnail');
       $name = 'FT'.date('Ymdhis').'.'.$request->file('thumbnail')->getClientOriginalExtension();
       $file->storeAs('public/', $name);
               //
        $antrianta = new antrianta;
        $antrianta->fill(request()->all());  
        $antrianta->thumbnail = $name;
        $antrianta->dokumen = $nama_dokumen;
        $antrianta->setuju = 'belum disetujui';
        $antrianta->id_user = Auth()->User()->id;
        $antrianta->save();
        return redirect('/tgsakhir/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['antrianta']= antrianta::get();
        return view('antrianta.show',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $antrianta = antrianta::find($id)->delete();
        return redirect('antrianta');
    }
}
