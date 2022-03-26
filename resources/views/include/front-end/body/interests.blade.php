   <!-- Interests-->
   <section class="resume-section" id="interests">
    <div class="resume-section-content">
        <h2 class="mb-5">Interests</h2>
        @foreach ($intersting as $interstings)
            
  
        <p>{{(@$interstings->intersting)?$interstings->intersting:"Intersting exemple"}}.</p>
        
        @endforeach
    </div>
</section>
<hr class="m-0" />