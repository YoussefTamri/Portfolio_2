<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\AdminPiplineRequest;
use App\Models\User;

class AdminPiplineController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
        public function create(){
    
            return view('admin_pipline.create');
        }
        public function store(AdminPiplineRequest $request){
    
     
            User::create([
             
                'name' => $request->name,
                'email' =>   $request->email,
                'password' =>  Hash::make($request->password),
               
            ]);
    
            return redirect()->back()->with(['success' => 'save successfuly ']);
    
          
        }
        public function getAdmin_pipline(){
    
    
            $admin_pipline = User::all();
    
            return view('admin_pipline.all',compact('admin_pipline'));
        }
    
    
    
        public function edit($admin_pipline_id){
            $admin_pipline = User::find($admin_pipline_id);  // search in given table id only
            if (!$admin_pipline)
                return redirect()->back()->with(['notfund' => 'not found']);
    
            $admin_pipline = User::select('id','name' ,'email')->find($admin_pipline_id);
    
            return view('admin_pipline.edit', compact('admin_pipline'));
    
    
        }
      
    
            public function update(AdminPiplineRequest $request, $admin_pipline_id)
            {
                $admin_pipline = User::find($admin_pipline_id);
                if (!$admin_pipline)
                    return redirect()->back();
        
                //update data
        
                $admin_pipline->update($request->all());
        
                return redirect()->back()->with(['success' => ' update successfully']);
            }
    
    
            public function delete($admin_pipline_id){
    
                $admin_pipline = User::find($admin_pipline_id);
                if(!$admin_pipline)
                return redirect() -> back()->with(['error' =>'education not fund']);
                
                $admin_pipline -> delete();
                return redirect()->back()->with(['success' => 'delete successfuly']);
               
            }
}
