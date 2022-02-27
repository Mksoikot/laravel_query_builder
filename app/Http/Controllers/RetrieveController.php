<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RetrieveController extends Controller
{
   function selectAllRow(){
      $result = DB::table('students')->get();
      return $result ;
   }

   function selectOneRow(){
    $result = DB::table('students')->where('name','Mk Soikot')->first();
    return json_encode($result);
 }

 function findRow(){
    $result = DB::table('students')->find(7);
    return json_encode($result);
 }
 function selectOneColumn(){
    $result = DB::table('students')->pluck('name');
    return json_encode($result);
 }
 function selectMulticolumn(){
    $result = DB::table('students')->pluck('name','id');
    return json_encode($result);
 }
 function spacificData(){
    $result = DB::table('students')->where('id','=','7')->value('name');
    return json_encode($result);
 }
}