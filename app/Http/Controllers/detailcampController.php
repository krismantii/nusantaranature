<?php

namespace App\Http\Controllers;
use App\Donate;
use Illuminate\Http\Request;

class detailcampController extends Controller
{
    public function index($id)
    {
        $camp = Donate::find($id);
        return view('detailcamp', ['camp'=>$camp]);
    }

    public function delete($id)
    {
        $camp = Donate::find($id);
        $camp -> delete();
        return redirect('/campaign')->with('info','campaign Deleted Successfully!');
    }

   
}
