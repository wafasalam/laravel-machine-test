<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Designation;
use DB;

class DesignationController extends Controller
{
    //
    public function index()
    {
        try {
            $designation=Designation::get();
        return view('designation.index', ['designation' =>  $designation]);
    } catch (\Exception $e) {
        return $e->getMessage();
    }
    }

    public function create()
    {
        try {
           
        return view('designation.create');
    } catch (\Exception $e) {
        return $e->getMessage();
    }
    }
      
    public function store(Request $request)
        {
          
            $this->validate($request, [
            
                'name' => 'required'
                
            ]);
            try {
                
                DB::transaction(function ()  use($request) {
                    $dept = new Designation;
                    $dept->Name=$request->name;
                    $dept->save();
                });
                return redirect('designation');

        } catch (\Exception $e) {
            return $e->getMessage();
        }
        }
}
