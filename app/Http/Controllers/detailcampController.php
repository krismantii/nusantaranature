<?php

namespace App\Http\Controllers;
<<<<<<< HEAD

=======
use App\Donate;
>>>>>>> 13140953d0ed435881206645cc1dcd60c588364b
use Illuminate\Http\Request;

class detailcampController extends Controller
{
<<<<<<< HEAD
    public function index()
    {
        return view('detailcamp');
    }
=======
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

   
>>>>>>> 13140953d0ed435881206645cc1dcd60c588364b
}
