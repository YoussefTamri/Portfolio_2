<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\ProjectRequest;
use App\Traits\AboutTrait;
use App\Models\Project;
class ProjectController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    } 

use AboutTrait;



public function create(){

    return view('project.create');
}
public function store(ProjectRequest $request){

    $file_name= $this ->saveImage($request->photo ,'images/project');
    $file_name_bg= $this ->saveImage($request->photo_baground ,'images/project_bg');
    Project::create([
         'photo' => $file_name,
         'photo_baground' => $file_name_bg,
        'titre' => $request->titre,
        'sous_titre' =>   $request->sous_titre,
        'github_link' =>  $request->github_link,
        'demo_link' => $request->demo_link,
        'description' => $request->description,
    ]);

    return redirect()->back()->with(['success' => 'save successfuly ']);

  
}
public function getProject(){


    $project = Project::all();

    return view('project.all',compact('project'));
}



public function edit($project_id){
    $project = Project::find($project_id);  // search in given table id only
    if (!$project)
        return redirect()->back()->with(['notfund' => 'not found']);

    $project = Project::select('id', 'titre', 'sous_titre', 'github_link', 'demo_link', 'description' , 'photo' ,'photo_baground')->find($project_id);

    return view('project.edit', compact('project'));


}


    public function update(ProjectRequest $request, $project_id)
    {
        $project = Project::find($project_id);
        if (!$project)
            return redirect()->back();

        //update data

        $project->update($request->all());

        return redirect()->back()->with(['success' => ' update successfully']);
    }


    public function delete($project_id){

        $project = Project::find($project_id);
        if(!$project)
        return redirect() -> back()->with(['error' =>'project not fund']);
        
        $project -> delete();
        return redirect()->back()->with(['success' => 'delete successfuly']);
        }

}
