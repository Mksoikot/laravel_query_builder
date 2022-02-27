<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class margeController extends Controller
{
    function margeData(){
        $result = DB::table('students')->get();
        $marks = DB::table('exam_marks')->get();

        $totalMarks = $result->merge($marks);
        return $totalMarks;
    }
}