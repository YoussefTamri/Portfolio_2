 <!-- Experience-->
 <section class="resume-section" id="experience">
    <div class="resume-section-content">
        <h2 class="mb-5">Experience</h2>

        @foreach($experience as $experiences)
        <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
            <div class="flex-grow-1">
                <h3 class="mb-0">{{(@$experiences->titre)?$experiences->titre:"Titre"}}</h3>
                <div class="subheading mb-3">{{(@$experiences->sous_titre)?$experiences->sous_titre:"description"}}</div>
                <p>{{(@$experiences->description)?$experiences->description:"description"}}</p>
            </div>
            <div class="flex-shrink-0"><span class="text-primary">{{(@$experiences->begin_date)?$experiences->begin_date:"Begin date"}} - {{(@$experiences->end_date)?$experiences->end_date:"End date"}}</span></div>
        </div>
        @endforeach
       
    </div>
</section>
