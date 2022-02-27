<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class selectController extends Controller
{
    function uniqueSelect(){
       $result = DB::table('students')->distinct()->get();
       return $result;
    }
    function singlecolumnSelect(){
        $result = DB::table('students')->select('name')->get();
        return $result;
    }
    function multicolumnSelect(){
        $result = DB::table('students')->select('name','roll')->get();
        return $result;
    }
}
