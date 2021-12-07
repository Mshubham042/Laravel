<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmpController extends Controller
{
   public function showdata(Request $request)
   {

   //    $validated = $request->validate([
   //       'username' => 'required',
   //       'userpwd' => 'required',
         
   //   ]);

     $users = DB::table('emp_detail')->get();

     return view('display', ['emprecords' => $users]);
            
            

   

   }
}
// $alldata = $request->All();

   // return view('display')->with('data',$alldata);
    // for returning a single request