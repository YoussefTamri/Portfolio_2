<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\AboutRequest;
use App\Models\About;
use Illuminate\Http\Request;
use App\Traits\AboutTrait;


class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

use AboutTrait;

    public function index(){

        return view('dashbord');
    }

    public function create(){

        return view('admin.create');
    }
    public function store(AboutRequest $request){

        $file_name= $this ->saveImage($request->photo ,'images/about');
        About::create([
             'photo' => $file_name,
            'first_name' => $request->first_name,
            'last_name' =>   $request->last_name,
            'phone' =>  $request->phone,
            'address' => $request->address,
            'email' => $request->email,
            'facebook' => $request->facebook,
            'linkdin' => $request->linkdin,
            'github' => $request->github,
            'instagram' => $request->instagram,
            'description' => $request->description,
        ]);

        return redirect()->back()->with(['success' => 'save successfuly ']);

      
    }
    public function getAbout(){


        $about = About::get()->all();

        return view('admin.about',compact('about'));
    }



    public function edit($about_id){
        $about = About::find($about_id);  // search in given table id only
        if (!$about)
            return redirect()->back()->with(['notfund' => 'not found']);

        $offer = About::select('id', 'first_name', 'last_name', 'address', 'phone', 'email' , 'description' , 'facebook' , 'linkdin' , 'github' , 'instagram' )->find($about_id);

        return view('admin.edit', compact('about'));


    }
  

        public function update(aboutRequest $request, $about_id)
        {
            $about = About::find($about_id);
            if (!$about)
                return redirect()->back();
    
            //update data
    
            $about->update($request->all());
    
            return redirect()->back()->with(['success' => ' update successfully']);
        }


        public function delete($about_id){

            $about = About::find($about_id);
            if(!$about)
            return redirect() -> back()->with(['error' =>'offers not fund']);
            
            $about -> delete();
            return redirect()->back()->with(['success' => 'delete successfuly']);
            }

       
}
