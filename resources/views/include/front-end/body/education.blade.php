    <!-- Education-->
    <section class="resume-section" id="education">
        <div class="resume-section-content">
            <h2 class="mb-5">Education</h2>
            
            @foreach ($education as $educations)
                
           
            
            <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                <div class="flex-grow-1">
                    <h3 class="mb-0">{{(@$educations->titre)?$educations->titre:"titre"}}</h3>
                    <div class="subheading mb-3">{{(@$educations->sous_titre)?$educations->sous_titre:"titre"}}</div>
                    <div>{{(@$educations->description)?$educations->description:"description"}}</div>
                
                </div>
                <div class="flex-shrink-0"><span class="text-primary">{{(@$educations->begin_date)?$educations->begin_date:"begin date"}} - {{(@$educations->end_date)?$educations->end_date:"end date"}}</span></div>
            </div>

            @endforeach
          
        </div>
    </section>
    <hr class="m-0" />