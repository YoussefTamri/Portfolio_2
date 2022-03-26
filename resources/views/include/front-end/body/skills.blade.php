    <!-- Skills-->
    <section class="resume-section" id="skills">
        <div class="resume-section-content">
            <h2 class="mb-5">Skills</h2>
         
            <div class="subheading mb-3">Programming Languages & Tools</div>

            @foreach ($skill as $skills)
                
           
            <ul class="list-inline dev-icons">
                
               
                <li class="list-inline-item"><i class="{{(@$skills->name)?$skills->name:"fab fa-laravel"}}"></i></li>
            </ul>
            @endforeach
                
           
            <div class="subheading mb-3">Workflow</div>
            <ul class="fa-ul mb-0">
                @foreach ($workflow as $workflows)
                <li>
                    
                    <span class="fa-li"><i class="fas fa-check"></i></span>
                    {{(@$workflows->workflow)?$workflows->workflow:"Exemple exemple"}}
                </li>
                @endforeach
              
        </div>
    </section>   
    <hr class="m-0" />