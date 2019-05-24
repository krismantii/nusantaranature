<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Komunitas;
use Illuminate\Support\Facades\Storage;

class tampilanupController extends Controller
{
    public function update(Request $request)
    {
        
       $this->validate($request,[
        'nama'=>'required',
        'telfon'=>'required',
        'daerah'=>'required',
        'foto'=>'required|image|mimes:jpeg,png,jpg,gif,svg', 
        'deskripsi'=>'required'
    ]);
    $komunitas = Komunitas::find($request->input('id'));
    $komunitas->nama = $request->input('nama');
    $komunitas->telfon = $request->input('telfon');
    $komunitas->daerah = $request->input('daerah');
    $komunitas->deskripsi = $request->input('deskripsi');
    if($request->hasFile('foto')){
        $name = Storage::disk('local')->put('public',$request->foto);
        $komunitas->foto= $name;
    }
    $komunitas->save();
    return redirect('tampilankom/'.$komunitas->id)->with('info','komunitas update Successfully!');
    }

    public function index($id)
    {
        $item = Komunitas::find($id);
        return view('tampilanup', ['item'=>$item]);
    }
}
