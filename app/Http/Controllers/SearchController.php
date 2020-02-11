<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
class SearchController extends Controller
{
    public function Search(){
        return view('search');
    }
    public function Result(Request $request){
        $select=$request->searchoption;
        $text=$request->txtsearch;
        if ($select=='id') {
            $data = DB::table('students')->select("*")
                ->where("id", "LIKE", "%{$text}%")
                ->first();
            if ($data==true){
                return redirect()->route('searchresult',compact('data'));
            }
        }
        elseif($select=='fname') {
            $data = DB::table('students')->select("*")
                ->where("fname", "LIKE", "%{$text}%")
                ->first();
            if ($data==true){
                return redirect()->route('searchresult',compact('data'));
            }
        }
        elseif($select=='lname') {
            $data = DB::table('students')->select("*")
                ->where("lname", "LIKE", "%{$text}%")
                ->first();
            if ($data==true){
                return redirect()->route('searchresult',compact('data'));
            }
        }
        elseif($select=='gender') {
            $data = DB::table('students')->select("*")
                ->where("gender", "LIKE", "%{$text}%")
                ->first();
            if ($data==true){
                return redirect()->route('searchresult',compact('data'));
            }
        }
        elseif($select=='city') {
            $data = DB::table('students')->select("*")
                ->where("city", "LIKE", "%{$text}%")
                ->first();
            if ($data==true){
                return redirect()->route('searchresult',compact('data'));
            }
        }

    }
}
