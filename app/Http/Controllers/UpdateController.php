<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UpdateController extends Controller
{
    function onUpdate(){
       $result = DB::table('students')->where('name','=','Tanha')->update(['name'=>'Tanha Khan','class'=>'5','roll'=>'1']);

       if($result==true){
           return 'Update Success';
       }
       else{
           return 'Update Failed';
       }
    }
}
