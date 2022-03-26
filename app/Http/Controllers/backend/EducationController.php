<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\EducationRequest;
use App\Models\Education;
use Illuminate\Http\Request;

class EducationController extends Controller
{
    public function __construct()
{
    $this->middleware('auth');
}
    public function create(){

        return view('education.create');
    }
    public function store(EducationRequest $request){

 
        Education::create([
         
            'titre' => $request->titre,
            'sous_titre' =>   $request->sous_titre,
            'begin_date' =>   $request->begin_date,
            'end_date' =>   $request->end_date,
            'description' => $request->description,
        ]);

        return redirect()->back()->with(['success' => 'save successfuly ']);

      
    }
    public function getEducation(){


        $education = Education::get()->all();

        return view('education.all',compact('education'));
    }



    public function edit($education_id){
        $education = Education::find($education_id);  // search in given table id only
        if (!$education)
            return redirect()->back()->with(['notfund' => 'not found']);

        $education = Education::select('id', 'titre', 'sous_titre', 'description' ,'begin_date', 'end_date' )->find($education_id);

        return view('education.edit', compact('education'));


    }
  

        public function update(EducationRequest $request, $education_id)
        {
            $education = Education::find($education_id);
            if (!$education)
                return redirect()->back();
    
            //update data
    
            $education->update($request->all());
    
            return redirect()->back()->with(['success' => ' update successfully']);
        }


        public function delete($education_id){

            $education = Education::find($education_id);
            if(!$education)
            return redirect() -> back()->with(['error' =>'education not fund']);
            
            $education -> delete();
            return redirect()->back()->with(['success' => 'delete successfuly']);
           
        }

}
