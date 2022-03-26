<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Experience;
use App\Http\Requests\ExperienceRequest;

class ExperienceController extends Controller
{
    
    public function __construct()
{
    $this->middleware('auth');
}
    
    public function create(){

        return view('experience.create');
    }
    public function store(ExperienceRequest $request){

 
        Experience::create([
         
            'titre' => $request->titre,
            'sous_titre' =>   $request->sous_titre,
            'begin_date' =>   $request->begin_date,
            'end_date' =>   $request->end_date,
            'description' => $request->description,
        ]);

        return redirect()->back()->with(['success' => 'save successfuly ']);

      
    }
    public function getExperience(){


        $experience = Experience::get()->all();

        return view('experience.all',compact('experience'));
    }



    public function edit($experience_id){
        $experience = Experience::find($experience_id);  // search in given table id only
        if (!$experience)
            return redirect()->back()->with(['notfund' => 'not found']);

        $experience = Experience::select('id', 'titre', 'sous_titre', 'description' ,'begin_date', 'end_date' )->find($experience_id);

        return view('experience.edit', compact('experience'));


    }
  

        public function update(ExperienceRequest $request, $experience_id)
        {
            $experience = Experience::find($experience_id);
            if (!$experience)
                return redirect()->back();
    
            //update data
    
            $experience->update($request->all());
    
            return redirect()->back()->with(['success' => ' update successfully']);
        }


        public function delete($experience_id){

            $experience = Experience::find($experience_id);
            if(!$experience)
            return redirect() -> back()->with(['error' =>'experience not fund']);
            
            $experience -> delete();
            return redirect()->back()->with(['success' => 'delete successfuly']);
            }

       
}
