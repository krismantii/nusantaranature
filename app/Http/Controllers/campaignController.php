<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Donate;
use Auth;

class campaignController extends Controller
{
    public function index()
    {
        $loggedInUserId = Auth::id();
        $camps = Donate::all()->where('camp_id', $loggedInUserId);

        return view('campaign',['camps'=>$camps]);
    }
}
