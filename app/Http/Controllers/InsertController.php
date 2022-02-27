<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InsertController extends Controller
{
    function InsertRow(){
      $result = DB::table('students')->insertOrIgnore(

          [
            ['id'=>'12','name'=>'kader','class'=>'6','roll'=>'3'],
            ['id'=>'13','name'=>'Limon','class'=>'7','roll'=>'4'],
            ['id'=>'14','name'=>'Jony','class'=>'6','roll'=>'5'],
            ['id'=>'15','name'=>'Shakil','class'=>'8','roll'=>'6']
          ]

        );


      if($result==true){
        return 'Insert Success';
      }
      else{
          return 'Insert Failed';
      }
    }
}
