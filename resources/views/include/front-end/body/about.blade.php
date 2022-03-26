  <!-- About-->
  <section class="resume-section" id="about">
    <div class="resume-section-content">
        <h1 class="mb-0">
{{(@$about->first_name)?$about->first_name:"First Name"}}
            <span class="text-primary">{{(@$about->last_name)?$about->last_name:"Last Name"}}</span>
        </h1>
        <div class="subheading mb-5">
            {{(@$about->address)?$about->address:"Address"}}· (+212) {{(@$about->phone)?$about->phone:"06666666666"}} ·
            <a href="mailto:name@email.com">{{(@$about->email)?$about->email:"exemple@exemple.com"}}</a>
        </div>
        <p class="lead mb-5">{{(@$about->description)?$about->description:"Description Here"}}.</p>
        <div class="social-icons">
            <a class="social-icon" href="{{(@$about->linkdin)?$about->linkdin:"#"}}"><i class="fab fa-linkedin-in"></i></a>
            <a class="social-icon" href="{{(@$about->github)?$about->github:"#"}}"><i class="fab fa-github"></i></a>
            <a class="social-icon" href="{{(@$about->intagram)?$about->instagram:"#"}}"><i class="fab fa-instagram"></i></a>
            <a class="social-icon" href="{{(@$about->facebook)?$about->facebook:"#"}}"><i class="fab fa-facebook-f"></i></a>
        </div>
 
        
    </div>
    </div>
</section>
<hr class="m-0" />