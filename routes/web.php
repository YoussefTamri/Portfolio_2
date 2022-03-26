<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend;
use App\Http\Controllers\backend;


use Illuminate\Support\Facades\Auth;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

############################################ begin prevent-back ##########################################################"


Route::group(['middleware' => 'prevent-back-history'],function(){




############################################ begin user page ##########################################################"

Route::get('/',[frontend\HomeController::class , 'index']);


############################################ end user page ##########################################################"





/////////////////////



############################################ begin about crud ##########################################################"




Route::group(['prefix'=>'/admin' ],function(){
Route::get('/dashbord',[backend\DashboardController::class , 'index']);
Route::group(['prefix'=>'/about'],function(){
Route::get('/create', [backend\DashboardController::class, 'create'])->name('about.create');
Route::get('/about', [backend\DashboardController::class, 'getAbout'])->name('about');
Route::post('/store', [backend\DashboardController::class, 'store'])->name('about.store');
Route::get('/edit/{about_id}', [backend\DashboardController::class, 'edit'])->name('about.edit');
Route::post('/update/{about_id}', [backend\DashboardController::class, 'update'])->name('about.update');
Route::get('/delete/{about_id}', [backend\DashboardController::class, 'delete'])->name('admin.about.delete');

});
});





############################################## end about crud #########################################################"


////////////////////////


############################################## begin experiance crud ################################################## "






Route::group(['prefix'=>'/experience'],function(){
    Route::get('/create', [backend\ExperienceController::class, 'create'])->name('experience.create');
    Route::get('/all', [backend\ExperienceController::class, 'getExperience'])->name('all');
    Route::post('/store', [backend\ExperienceController::class, 'store'])->name('experience.store');
    Route::get('/edit/{experience_id}', [backend\ExperienceController::class, 'edit'])->name('experience.edit');
    Route::post('/update/{experience_id}', [backend\ExperienceController::class, 'update'])->name('experience.update');
    Route::get('/delete/{experience_id}', [backend\ExperienceController::class, 'delete'])->name('experience.delete');
    
    });






############################################## end experiance crud #####################################################"



////////////////////////



############################################## begin education crud #####################################################"



Route::group(['prefix'=>'/education'],function(){
    Route::get('/create', [backend\EducationController::class, 'create'])->name('education.create');
    Route::get('/all', [backend\EducationController::class, 'getEducation'])->name('education.all');
    Route::post('/store', [backend\EducationController::class, 'store'])->name('education.store');
    Route::get('/edit/{education_id}', [backend\EducationController::class, 'edit'])->name('education.edit');
    Route::post('/update/{education_id}', [backend\EducationController::class, 'update'])->name('education.update');
    Route::get('/delete/{education_id}', [backend\EducationController::class, 'delete'])->name('education.delete');
    
    });




############################################## end education crud #####################################################"



////////////////////////



############################################# end skill crud #####################################################"




Route::group(['prefix'=>'/skill'],function(){
    Route::get('/create', [backend\SkillController::class, 'create'])->name('skill.create');
    Route::get('/all', [backend\SkillController::class, 'getSkill'])->name('skill.all');
    Route::post('/store', [backend\SkillController::class, 'store'])->name('skill.store');
    Route::get('/edit/{education_id}', [backend\SkillController::class, 'edit'])->name('skill.edit');
    Route::post('/update/{education_id}', [backend\SkillController::class, 'update'])->name('skill.update');
    Route::get('/delete/{education_id}', [backend\SkillController::class, 'delete'])->name('skill.delete');
    
    });




    ############################################# end skill crud #####################################################"



    ////////////////////////



   ############################################# end skill crud #####################################################"




Route::group(['prefix'=>'/workflow'],function(){
    Route::get('/create', [backend\WorkFlowController::class, 'create'])->name('workflow.create');
    Route::get('/all', [backend\WorkFlowController::class, 'getWorkFlow'])->name('workflow.all');
    Route::post('/store', [backend\WorkFlowController::class, 'store'])->name('workflow.store');
    Route::get('/edit/{workflow_id}', [backend\WorkFlowController::class, 'edit'])->name('workflow.edit');
    Route::post('/update/{workflow_id}', [backend\WorkFlowController::class, 'update'])->name('workflow.update');
    Route::get('/delete/{workflow_id}', [backend\WorkFlowController::class, 'delete'])->name('workflow.delete');
    
    });




    ############################################# end skill crud #####################################################"


    ////////////////////////



    ############################################# end intersting crud #####################################################"




 Route::group(['prefix'=>'/intersting'],function(){
    Route::get('/create', [backend\InterstingController::class, 'create'])->name('intersting.create');
    Route::get('/all', [backend\InterstingController::class, 'getIntersting'])->name('intersting.all');
    Route::post('/store', [backend\InterstingController::class, 'store'])->name('intersting.store');
    Route::get('/edit/{intersting_id}', [backend\InterstingController::class, 'edit'])->name('intersting.edit');
    Route::post('/update/{intersting_id}', [backend\InterstingController::class, 'update'])->name('intersting.update');
    Route::get('/delete/{intersting_id}', [backend\InterstingController::class, 'delete'])->name('intersting.delete');
    
    });




    ############################################# end intersting crud #####################################################"



        ////////////////////////



    ############################################# end project crud #####################################################"




 Route::group(['prefix'=>'/project'],function(){
    Route::get('/create', [backend\ProjectController::class, 'create'])->name('project.create');
    Route::get('/all', [backend\ProjectController::class, 'getProject'])->name('project.all');
    Route::post('/store', [backend\ProjectController::class, 'store'])->name('project.store');
    Route::get('/edit/{project_id}', [backend\ProjectController::class, 'edit'])->name('project.edit');
    Route::post('/update/{project_id}', [backend\ProjectController::class, 'update'])->name('project.update');
    Route::get('/delete/{project_id}', [backend\ProjectController::class, 'delete'])->name('project.delete');
    
    });




    ############################################# end project crud #####################################################"
    
    ############################################# end admin_pipline crud #####################################################"




 Route::group(['prefix'=>'/admin_pipline'],function(){
    Route::get('/create', [backend\AdminPiplineController::class, 'create'])->name('admin_pipline.create');
    Route::get('/all', [backend\AdminPiplineController::class, 'getAdmin_pipline'])->name('admin_pipline.all');
    Route::post('/store', [backend\AdminPiplineController::class, 'store'])->name('admin_pipline.store');
    Route::get('/edit/{admin_pipline_id}', [backend\AdminPiplineController::class, 'edit'])->name('admin_pipline.edit');
    Route::post('/update/{admin_pipline_id}', [backend\AdminPiplineController::class, 'update'])->name('admin_pipline.update');
    Route::get('/delete/{admin_pipline_id}', [backend\AdminPiplineController::class, 'delete'])->name('admin_pipline.delete');
    
    });




    ############################################# end admin_pipline crud #####################################################"







    ////////////////////



############################################ begin Authentefication ##########################################################"


Auth::routes();


############################################ end Authentefication ##########################################################"




    ////////////////////



############################################ begin Home ##########################################################"

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

############################################ begin Home ##########################################################"


});

   ############################################# begin  contact me    ############################################# 



Route::post('/send-message',[frontend\ContactFormController::class , 'store'])->name('contact.store');



   ############################################# end  contact me    ############################################# 



   ############################################# end  prevent-back    ############################################# 