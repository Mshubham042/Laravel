<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmpController extends Controller
{
   public function showdata()
   {

   //    $validated = $request->validate([
   //       'username' => 'required',
   //       'userpwd' => 'required',
         
   //   ]);

     $users = DB::table('test')->get();

     return view('display', ['emprecords' => $users]);
            
   }
   public function deleteuser($id)
   {
      DB::table('test')->where('id', $id)->delete();

      return redirect("user_Data");
   }

   public function insertdata(request $request)
   {
      $name = $request->get("name");
      $username = $request->get("username");
      $password = $request->get("password");
      $gender = $request->get("gender");
      $stream = $request->get("stream");

      DB::table('test')->insert([
         'Name' => $name,
         'Username' => $username,
         'Password' => $password,
         'Gender'=> $gender,
         'Stream'=>$stream
     ]);
     return redirect("user_Data");
      
   }

   public function editfun($id)
   {
      $users = DB::table('test')->where('id', $id)->get();
      return view("home" , ['users' => $users]);
   }
}
// $alldata = $request->All();

   // return view('display')->with('data',$alldata);
    // for returning a single request