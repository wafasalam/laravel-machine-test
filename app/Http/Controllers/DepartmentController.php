<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;
use DB;

class DepartmentController extends Controller
{
    //
    public function index()
    {
        try {
            $department=Department::get();
        return view('department.index', ['department' =>  $department]);
    } catch (\Exception $e) {
        return $e->getMessage();
    }
    }

    public function create()
    {
        try {
            $department=Department::get();
        return view('department.create', ['department' =>  $department]);
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
                    $dept = new Department;
                    $dept->Name=$request->name;
                    $dept->save();
                });
                return redirect('department');

        } catch (\Exception $e) {
            return $e->getMessage();
        }
        }
}
