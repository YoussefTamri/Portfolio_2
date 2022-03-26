<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\SkillRequest;
use App\Models\Skill;


class SkillController extends Controller
{
    public function __construct()
{
    $this->middleware('auth');
}
    public function create(){

        return view('skill.create');
    }
    public function store(SkillRequest $request){

 
        Skill::create([
         
            'name' => $request->name,
        ]);

        return redirect()->back()->with(['success' => 'save successfuly ']);

      
    }
    public function getSkill(){


        $skill = Skill::get()->all();

        return view('skill.all',compact('skill'));
    }



    public function edit($skill_id){
        $skill = Skill::find($skill_id);  // search in given table id only
        if (!$skill)
            return redirect()->back()->with(['notfund' => 'not found']);

        $skill = Skill::select('id', 'name' )->find($skill_id);

        return view('skill.edit', compact('skill'));


    }
  

        public function update(SkillRequest $request, $skill_id)
        {
            $skill = Skill::find($skill_id);
            if (!$skill)
                return redirect()->back();
    
            //update data
    
            $skill->update($request->all());
    
            return redirect()->back()->with(['success' => ' update successfully']);
        }


        public function delete($skill_id){

            $skill = Skill::find($skill_id);
            if(!$skill)
            return redirect() -> back()->with(['error' =>'skill not fund']);
            
            $skill -> delete();
            return redirect()->back()->with(['success' => 'delete successfuly']);
            }
}
