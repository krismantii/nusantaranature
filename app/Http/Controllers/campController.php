<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Donate;
use Auth;
use Illuminate\Support\Facades\Storage;

class campController extends Controller
{
    public function publicCampaign() {
        $camps = Donate::all();

        return view('campaign', ['camps'=>$camps]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $loggedInUserId = Auth::id();
        $camps = Donate::all()->where('camp_id', $loggedInUserId);
        
        return view('camp',['camps'=>$camps]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
   
    public function store(Request $request)
    {
        $camp = new Donate;

        $campTitle = $request->nama;
        $campDescription = $request->deskripsi;
        $campDaerah = $request->daerah;
        $campId = Auth::id();

        $camp->camp_id = $campId;
        $camp->nama_camp = $campTitle;
        $camp->desc_camp = $campDescription;
        $camp->daerah = $campDaerah;
        if($request->hasFile('foto')){
            $name = Storage::disk('local')->put('public',$request->foto);
            $camp->foto= $name;
        }
        $camp->save();

        return redirect('campaign');

        }
    
}
