<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Global Tecnologia</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <script src="https://kit.fontawesome.com/ae360af17e.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/estilos1.css">
</head>

<body>
    <!-- ======== Main wrapper for dashboard =========== -->

    <div class="wrapper">
        <!-- =========== Sidebar for admin dashboard =========== -->

        <aside id="sidebar" class="js-sidebar">

            <!-- ======== Content For Sidebar ========-->
            <div class="h-100">
               <div class="sidebar-logo">
                <a href="#">Admint</a>
                 
               </div>


                <!-- ======= Navigation links for sidebar ======== -->
                <ul class="sidebar-nav">
                  <li class="sidebar-header">
                    Admin Elementos
                  </li>
                  <li class="sidebar-item">
                    <a href="#" class="sidebar-link">
                      <i class="bi bi-card-checklist"></i>
                      Dashboard
                    </a>
                  </li>
                <li class="sidebar-item sidebar-link">
                  <a href="#" class="sidebar-link collapsed" data-bs-target="#pages"
               data-bs-toggle="collapse" aria-expanded="false" ><i class="bi bi-file-earmark-fill pe-2" ></i>pages</a>
            <ul id="pages" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
              <li class="sidebar-item ">
                <a href="#" class="mx-3">pagina 1</a>
              </li>
              <li class="sidebar-item">
                <a href="#" class="mx-3">pagina 2</a>
              </li>
              <li class="sidebar-item">
                <a href="#" class="mx-3">pagina 3</a>
              </li>
            </ul>
                  
                </li>
                <li class="sidebar-item">
                  <a href="#" class="sidebar-link collapsed" data-bs-target="#post"
               data-bs-toggle="collapse" aria-expanded="false" ><i class="bi bi-sliders"></i>
post</a>
            <ul id="post" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
              <li class="sidebar-item">
                <a href="#" class="mx-3">post 1</a>
              </li>
              <li class="sidebar-item">
                <a href="#" class="mx-3">post 2</a>
              </li>
              <li class="sidebar-item">
                <a href="#" class="mx-3">post 3</a>
              </li>
            </ul>
                  
                </li>
                 <li class="sidebar-item">
                    <a href="#" class="sidebar-link">
                      <i class="bi bi-people"></i>
                      User
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="#" class="sidebar-link">
                      <i class="bi bi-box-arrow-right"></i>
                      Logout
                    </a>
                  </li>


                </ul>
            </div>
        </aside>

        <!-- ========= Main section of dashboard ======= -->

        <div class="main">
          <nav class="navbar navbar-expand px-2 border-bottom">
            <button class="btn" id="sidebar-toggle" type="button">
              <span class="navbar-toggler-icon">
              </span>
            </button>
            <div class="navbar-collapse navbar">
              <ul class="navbar-collapse navbar ">
                <li class="nav-item dropdown ms-auto">
                  <a href="#" data-bs-toggle="dropdown" class="nav-icon pe-md-0">
                    <img src="img/profile.jpg" class="avatar img-fluid rounded" alt="">
                  </a>
                  <div class="dropdown-menu dropdown-menu-end">
                    <a href="#" class="dropdown-item"><i class="bi bi-person-circle mx-2"></i>Profile</a>
                      <a href="#" class="dropdown-item"><i class="bi bi-sliders mx-2"></i>Setting</a>
                        <a href="#" class="dropdown-item"><i class="bi bi-box-arrow-right mx-2"></i>Logout</a>
                  </div>
                </li>
                

              </ul>

            </div>
          </nav>

          <main class="content px-3 py-2">
            <div class="container-fluid">
              <div class="mb-3">
                <h4>Profile</h4>
                
              </div>
                     <div class="row">
                              <div class="col-12 col-md-6 d-flex">
                                  <div class="card flex-fill border-0 illustration">
                                      <div class="card-body p-0 d-flex flex-fill">
                                          <div class="row g-0 w-100">
                                              <div class="col-11">
                                                <h4 class="mt-3" style="text-align: center;">ACTUALIZAR</h4>
                                    
                                               <form class="ms-auto ms-3">
                                              <div class="ms-3">
                                                <label for="exampleInputEmail1" class="form-label">Nombre</label>
                                                <input type="text" class="form-control" id="nombre" required="">
                                                
                                              </div>
                                              <div class="ms-3">
                                                <label for="exampleInputPassword1" class="form-label">Apellido</label>
                                                <input type="text" class="form-control" required="">
                                              </div>
                                              <div class="ms-3">
                                                <label for="exampleInputPassword1" class="form-label">Email</label>
                                                <input type="email" class="form-control" id="exampleInputEmail1"  required="">
                                              </div>
                                              <div class="ms-3">
                                                <label for="exampleInputPassword1" class="form-label">Pais</label>
                                                <input type="text" class="form-control"  required="">
                                              </div>
                                              <div class="ms-3">
                                                <label for="exampleInputPassword1" class="form-label">Direcion</label>
                                                <input type="text" class="form-control" required="" >
                                              </div>
                                              
                                              
                                              <button type="submit" class="btn btn-success mt-3 " style="margin-left: 190px; margin-bottom: 20px;">Guardar</button>
                                            </form>
                                              </div>
                                              
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-6 col-md-6 d-flex">
                                  <div class="card flex-fill border-0">
                                      <div class="card-body py-4">
                                          <div class="">
                                              <div class="flex-grow-1">
                                                <form action="" method="GET" enctype="multipart/form-data" style="align-content: center;">
                                              <div style="margin-top: 50px;">
                                                <img src="img/login30.png" width="200px" height="200px" onclick=(avatar) class="mx-5 ml-5" style="border:0;border-radius: 110px;margin-left: 2500px;"><br>
                                                <label for="avatar" style="margin-top: 25px;"><strong>Avatar</strong></label>
                                                <input type="file" name="avatar" id="avatar"><br><hr>
                                                <input type="submit" class="btn btn-danger" name="Cambiar Foto" style="margin-left: 150px;">
                                              </div>
                                            </form>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <!-- Table Element -->
                    <div class="">
                        
                        <div class="">
  
                        </div>
                    </div>
                    </div>
              
                  </div>
                </div>
          </main>   
         
        </div>

            <!-- ========= Main navbar section of dashboard ======= -->

            <nav class="navbar navbar-expand px-3 border-bottom">
          

            </nav>

            <!-- ========= Main content section of dashboard ======= -->

            <main class="content px-3 py-2">
                <div class="container-fluid">

                   </div></main>
                    

            <!-- ========= light and dark mode toggle button ======= -->

            <a href="#" class="theme-toggle">
                <i class="fa-regular fa-moon"></i>
                <i class="fa-regular fa-sun"></i>
            </a>
      </div>
            <!-- ========= footer section of dashboard ======= -->
 <footer class="footer">
             <div class="container-fluid">
               <div class="row text-muted">
                 <div class="col-6 text-start">
                   <p class="mb-0">
                     <a href="#" class="text-muted">
                       <strong>Casatalento</strong>
                     </a>
                   </p>
                 </div>
                 <div class="col-6 text-end">
                  <ul class="list-inline">
                    <li class="list-inline-item">
                      <a href="#" class="text-muted">contact</a>
                    </li>
                    <li class="list-inline-item">
                      <a href="#" class="text-muted">About Us</a>
                    </li>
                    <li class="list-inline-item">
                      <a href="#" class="text-muted">Termins</a>
                    </li>
                    <li class="list-inline-item">
                      <a href="#" class="text-muted">Booking</a>
                    </li>
                  </ul>
                   
                 </div>
               </div>
             </div>
            </footer>
         
        
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="js/sidebar.js"></script>
    <script type="text/javascript">
      const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
       const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))
    </script>
</body>

</html>