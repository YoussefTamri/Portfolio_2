<?php

namespace App\Http\Controllers\frontend;

use App\Events\PortfolioViewr;
use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Education;
use App\Models\EventViwer;
use App\Models\Experience;
use App\Models\Intersting;
use App\Models\Project;
use App\Models\Skill;
use App\Models\Workflow;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    
    public function index()
    {

        # officille page users

        $project = Project::all();
        $about = About::first();
        $experience = Experience::all();
        $skill = Skill::all();
        $education = Education::all();
        $intersting = Intersting::all();
        $workflow = Workflow::all();

        $viwer = EventViwer::find(10);
        event(new PortfolioViewr($viwer));


        return view('include.front-end.index',compact('project','about','experience','skill','education','intersting','workflow'));
        
    }

 
 

}
