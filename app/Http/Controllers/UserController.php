<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use App\Models\Department;
use App\Models\Designation;
use DB;

class UserController extends Controller
{
    //
    public function index()
    {
        try {
            $Users=Users::get();
        return view('User.index', ['Users' =>  $Users]);
    } catch (\Exception $e) {
        return $e->getMessage();
    }
    }

    
    public function create()
    {
        try {
            $department=Department::get();
            $designation=Designation::get();
        return view('user.create',['department' =>  $department,'designation' =>  $designation]);
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
                    $user = new Users;
                    $user->Name=$request->name;
                    $user->FK_department=$request->dept;
                    $user->FK_designation=$request->desg;
                    $user->phone_number=$request->number;
                    $user->save();
                });
                return redirect('user');

        } catch (\Exception $e) {
            return $e->getMessage();
        }
        }
}
