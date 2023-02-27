<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use DB;

class SearchController extends Controller
{
    //
    public function index()
    {
        try {
            $users=Users::get();
        return view('search.index',['users'=>$users]);
    } catch (\Exception $e) {
        return $e->getMessage();
    }
    }

    public function search(Request $request)
    {
  try{
    $users=Users::Where('Name', 'FK_department', 'FK_designation','%' . $request->input('user') . '%')->get();

    return view('search.index',['users'=>$users]);
  }
  catch (\Exception $e){
            
    return $e->getMessage();
}
    }
    
}
