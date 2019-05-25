<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Donate;
use Auth;
<<<<<<< HEAD
=======
use Illuminate\Support\Facades\Storage;
>>>>>>> 13140953d0ed435881206645cc1dcd60c588364b

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
<<<<<<< HEAD
        $campDescription = $request->desc;
        $campDaerah = $request->area;
=======
        $campDescription = $request->deskripsi;
        $campDaerah = $request->daerah;
>>>>>>> 13140953d0ed435881206645cc1dcd60c588364b
        $campId = Auth::id();

        $camp->camp_id = $campId;
        $camp->nama_camp = $campTitle;
        $camp->desc_camp = $campDescription;
        $camp->daerah = $campDaerah;
<<<<<<< HEAD

=======
        if($request->hasFile('foto')){
            $name = Storage::disk('local')->put('public',$request->foto);
            $camp->foto= $name;
        }
>>>>>>> 13140953d0ed435881206645cc1dcd60c588364b
        $camp->save();

        return redirect('campaign');

        }
    
}
