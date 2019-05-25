<?php

namespace App\Http\Controllers;

use App\Komunitas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Auth;

class komunitasController extends Controller
{
    public function publicKomunitas()
    {
        $komunitas = Komunitas::all();
        return view('komunitas', ['komunitas'=>$komunitas]);
    }

    public function index()
    {
        $loggedInUserId = Auth::id();
        $komunitas = Komunitas::all()->where('komunitas_id', $loggedInUserId);
        
        return view('komunitas',['komunitas'=>$komunitas]);
    }

    public function tampilanadd()
    {
        return view('addkomunitas');
    }

    public function add(Request $request){
        // error_log($request);
        // $this->validate($request,[
        //     'nama'=>'required',
        //     'telfon'=>'required',
        //     'daerah'=>'required',
        //     'foto'=>'image|mimes:jpeg,png,jpg,gif,svg', 
        //     'deskripsi'=>'required'
        // ]);
        $komunitas = new Komunitas;
        $komunitas->komunitas_id= Auth::id();
        $komunitas->nama = $request->nama;
        $komunitas->telfon = $request->telfon;
        $komunitas->daerah = $request->daerah;
        $komunitas->deskripsi = $request->deskripsi;
        if($request->hasFile('foto')){
            $name = Storage::disk('local')->put('public',$request->foto);
            $komunitas->foto= $name;
        }
        $komunitas->save();
        return redirect('komunitas');
    }

}
