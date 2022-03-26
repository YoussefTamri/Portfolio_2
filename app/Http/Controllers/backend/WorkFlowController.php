<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\WorkFlowRequest;
use App\Models\Workflow;

class WorkFlowController extends Controller
{
    public function __construct()
{
    $this->middleware('auth');
}
    public function create(){

        return view('workflow.create');
    }
    public function store(WorkFlowRequest $request){

 
        Workflow::create([
         
            'workflow' => $request->workflow,
        ]);

        return redirect()->back()->with(['success' => 'save successfuly ']);

      
    }
    public function getWorkFlow(){


        $workflow = Workflow::get()->all();

        return view('workflow.all',compact('workflow'));
    }



    public function edit($workflow_id){
        $workflow = Workflow::find($workflow_id);  // search in given table id only
        if (!$workflow)
            return redirect()->back()->with(['notfund' => 'not found']);

        $workflow = Workflow::select('id', 'workflow' )->find($workflow_id);

        return view('workflow.edit', compact('workflow'));


    }
  

        public function update(WorkFlowRequest $request, $workflow_id)
        {
            $workflow = Workflow::find($workflow_id);
            if (!$workflow)
                return redirect()->back();
    
            //update data
    
            $workflow->update($request->all());
    
            return redirect()->back()->with(['success' => ' update successfully']);
        }


        public function delete($workflow_id){

            $workflow = Workflow::find($workflow_id);
            if(!$workflow)
            return redirect() -> back()->with(['error' =>'skill not fund']);
            
            $workflow -> delete();
            return redirect()->back()->with(['success' => 'delete successfuly']);
            }
}
