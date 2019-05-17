<?php

namespace App\Http\Controllers;

use App\Komunitas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class komunitasController extends Controller
{
    public function index()
    {
        $komunitas = Komunitas::All();
        return view('komunitas', ['komunitas'=>$komunitas]);
    }

    public function tampilanadd()
    {
        return view('addkomunitas');
    }

    public function add(Request $request){
        error_log($request);
        $this->validate($request,[
            'nama'=>'required',
            'telfon'=>'required',
            'daerah'=>'required',
            'foto'=>'image|mimes:jpeg,png,jpg,gif,svg', 
            'deskripsi'=>'required'
        ]);
        $komunitas = new Komunitas;
        $komunitas->nama = $request->input('nama');
        $komunitas->telfon = $request->input('telfon');
        $komunitas->daerah = $request->input('daerah');
        $komunitas->deskripsi = $request->input('deskripsi');
        if($request->hasFile('foto')){
            $name = Storage::disk('local')->put('public',$request->foto);
            $komunitas->foto= $name;
        }
        $komunitas->save();
        return redirect('komunitas')->with('info','komunitas berhasil ditambahkan.');
    }

}
