<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Yousseftamri - Admin</title>
        <link href="{{asset('dashboard/css/styles.css')}}" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body>
     
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.html">Admin Dashboard</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
          
    
            <!-- Navbar-->
            <ul class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                   
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="{{ route('logout') }}"onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">Logout</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                          
                        
                            
                            <div>

                                <a class="nav-link collapsed" href="{{url('home')}}" >
                                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                    Dashboard
                                 
                                </a>
                          
                       
                            </div>
                            <div>

                                <a class="nav-link collapsed" href="{{url('/')}}" >
                                    <div class="sb-nav-link-icon"><i class="far fa-eye"></i></div>
                                    My Website
                                 
                                </a>
                          
                       
                            </div>
                          
                            <div class="sb-sidenav-menu-heading">Interface</div>
                             {{-- ############################################################ begin slide abouts ########################################################################################### --}}



                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-question-circles"></i></div>
                                about
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="{{route('about.create')}}">create</a>
                                    <a class="nav-link" href="{{route('about')}}">about</a>
                                    

                                 
                                </nav>
                            </div>


                             {{-- ############################################################  end  slide abouts ########################################################################################### --}}




                             {{-- ############################################################ begin slide experience ########################################################################################### --}}



                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayout" aria-expanded="false" aria-controls="collapseLayout">
                                <div class="sb-nav-link-icon"><i class="fas fa-brain"></i></div>
                                experience
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayout" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="{{route('experience.create')}}">create</a>
                                    <a class="nav-link" href="{{route('all')}}">all</a>
                                </nav>
                            </div>


                             {{-- ############################################################ end slide experience ########################################################################################### --}}





                             {{-- ############################################################ begin slide education ########################################################################################### --}}



                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayout1" aria-expanded="false" aria-controls="collapseLayout1">
                                <div class="sb-nav-link-icon"><i class="fas fa-school"></i></div>
                                education
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayout1" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="{{route('education.create')}}">create</a>
                                    <a class="nav-link" href="{{route('education.all')}}">all</a>
                                </nav>
                            </div>



                             {{-- ############################################################ end slide education ########################################################################################### --}}





                            {{-- ############################################################  begin slide skills ########################################################################################### --}}




                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayout2" aria-expanded="false" aria-controls="collapseLayout2">
                                <div class="sb-nav-link-icon"><i class="fas fa-shapes"></i></div>
                                skill
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayout2" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="{{route('skill.create')}}">create</a>
                                    <a class="nav-link" href="{{route('skill.all')}}">all</a>
                                </nav>
                            </div>
                            


                             {{-- ############################################################ end slide skills ########################################################################################### --}}
                       
                          


                              {{-- ############################################################  begin slide workflow ########################################################################################### --}}




                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayout3" aria-expanded="false" aria-controls="collapseLayout3">
                                <div class="sb-nav-link-icon"><i class=" fas fa-briefcase"></i></div>
                                workflow
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayout3" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="{{route('workflow.create')}}">create</a>
                                    <a class="nav-link" href="{{route('workflow.all')}}">all</a>
                                </nav>
                            </div>
                            


                             {{-- ############################################################ end slide workflow ########################################################################################### --}}



                               {{-- ############################################################  begin slide intersting ########################################################################################### --}}




                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayout4" aria-expanded="false" aria-controls="collapseLayout4">
                                <div class="sb-nav-link-icon"><i class="fas fa-thumbtack"></i></div>
                                intersting
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayout4" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="{{route('intersting.create')}}">create</a>
                                    <a class="nav-link" href="{{route('intersting.all')}}">all</a>
                                </nav>
                            </div>
                            


                             {{-- ############################################################ end slide intersting ########################################################################################### --}}



                             
                               {{-- ############################################################  begin slide project ########################################################################################### --}}




                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayout5" aria-expanded="false" aria-controls="collapseLayout5">
                                <div class="sb-nav-link-icon"><i class="fab fa-whmcs"></i></div>
                                project
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayout5" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="{{route('project.create')}}">create</a>
                                    <a class="nav-link" href="{{route('project.all')}}">all</a>
                                </nav>
                            </div>
                            


                             {{-- ############################################################ end slide project ########################################################################################### --}}



                             
                               {{-- ############################################################  begin slide project ########################################################################################### --}}




                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayoutA" aria-expanded="false" aria-controls="collapseLayoutA">
                                <div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
                                Admin
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayoutA" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="{{route('admin_pipline.create')}}">  <div class="sb-nav-link-icon"><i class="fas fa-user-plus"> </i></div> Add Admin</a>
                                    <a class="nav-link" href="{{route('admin_pipline.all')}}">all</a>
                                </nav>
                            </div>
                            


                             {{-- ############################################################ end slide project ########################################################################################### --}}
                          
                    </div>
                    
                    <div class="sb-sidenav-footer"></div>
                  
                </nav>
            </div>
            <div id="layoutSidenav_content"  padding="center">
                @yield('content')
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Yousseftamri.com 2022</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="{{asset('dashboard/js/scripts.js')}}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    </body>
</html>
