
 <section class="center-section" id="myprojects">
        <div class="profile-area">
            <div class="container">
            <h2 class="mb-5 text-center">My Projects</h2>
            <div class="row">
        <div class="card-group">



            @foreach ($project as $projects)
                

            <div class="col-md-4">
                <div class="card">
                    <div class="img1"><img src="{{asset('images/project_bg/'.$projects->photo_baground)}}" alt=""></div>
                    <div class="img2"><img src="{{asset('images/project/'.$projects->photo)}}" alt=""></div>
                    <div class="main-text">
                        <h2> {{(@$projects->titre)?$projects->titre:"Titre"}}</h2>
                        <p>{{(@$projects->description)?$projects->titre:"Desciption"}}
                           
                        </p>
                        <td>
                            <a href="{{(@$projects->demo_link)?$projects->demo_link:"#"}}" class="btn btn-outline-dark"> demo </a>
                            <a href="{{(@$projects->github_link)?$projects->github_link:"#"}}" class="btn btn-outline-dark"> github </a>
                        </td>
                       

                    </div>
                </div>
            </div>
            @endforeach
            
          

          </div>
        </div>
        </div>
        </section>