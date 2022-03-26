<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\InterstingRequest;
use App\Models\Intersting;

class InterstingController extends Controller
{
    public function __construct()
{
    $this->middleware('auth');
}
    
    
    public function create(){

        return view('intersting.create');
    }
    public function store(InterstingRequest $request){

 
        Intersting::create([
         
            'intersting' => $request->intersting,
        ]);

        return redirect()->back()->with(['success' => 'save successfuly ']);

      
    }
    public function getIntersting(){


        $intersting = Intersting::all();

        return view('intersting.all',compact('intersting'));
    }



    public function edit($intersting_id){
        $intersting = Intersting::find($intersting_id);  // search in given table id only
        if (!$intersting)
            return redirect()->back()->with(['notfund' => 'not found']);

        $intersting = Intersting::select('id', 'intersting' )->find($intersting_id);

        return view('intersting.edit', compact('intersting'));


    }
  

        public function update(InterstingRequest $request, $intersting_id)
        {
            $intersting = Intersting::find($intersting_id);
            if (!$intersting)
                return redirect()->back();
    
            //update data
    
            $intersting->update($request->all());
    
            return redirect()->back()->with(['success' => ' update successfully']);
        }


        public function delete($intersting_id){

            $intersting = Intersting::find($intersting_id);
            if(!$intersting)
            return redirect() -> back()->with(['error' =>'Intersting not fund']);
            
            $intersting -> delete();
            return redirect()->back()->with(['success' => 'delete successfuly']);
            }

}
