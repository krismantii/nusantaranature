<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Donate;
use Illuminate\Support\Facades\Storage;

class updcampController extends Controller
{
    public function update(Request $request)
    {
        $camp = Donate::find($request->input('id'));
        $camp->nama_camp = $request->input('nama');
        $camp->daerah = $request->input('daerah');
        $camp->desc_camp = $request->input('deskripsi');
        if($request->hasFile('foto')){
            $name = Storage::disk('local')->put('public',$request->foto);
            $camp->foto= $name;
        }
        $camp->save();

        return redirect('detailcamp/'.$camp->id)->with('info','campaign update Successfully!');
       }

       public function index($id)
       {
           $camp = Donate::find($id);
           return view('updcamp', ['camp'=>$camp]);
       }
}
