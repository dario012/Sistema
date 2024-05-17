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
                <a href="#">Global Tecnologia</a>
                 
               </div>


                <!-- ======= Navigation links for sidebar ======== -->
                <ul class="sidebar-nav">
                  <li class="sidebar-header">
                   
                  </li>
                  <li class="sidebar-item">
                    <a href="#" class="sidebar-link">
                      <i class="bi bi-card-checklist"></i>
                      Dashboard
                    </a>
                  </li>
                
                <li class="sidebar-item">
                  <a href="#" class="sidebar-link collapsed" data-bs-target="#post"
  data-bs-toggle="collapse" aria-expanded="false" ><i class="bi bi-people"></i>Users</a>
            <ul id="post" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
              <li class="sidebar-item">
                <a href="#" class="mx-3">Information</a>
              </li>
              <li class="sidebar-item">
                <a href="#" class="mx-3">Modify Data</a>
              </li>
            </ul>
                  
                </li>
                 <li class="sidebar-item">
                    <a href="#" class="sidebar-link">
                      <i class="bi bi-sliders"></i>
                      Setting
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
                    <a href="editar.php" class="dropdown-item"><i class="bi bi-person-circle mx-2"></i>Profile</a>
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
                <h4>Admin Dashboard</h4>
                
              </div>
                     <div class="row">
                              <div class="col-12 col-md-6 d-flex">
                                  <div class="card flex-fill border-0 illustration">
                                      <div class="card-body p-0 d-flex flex-fill">
                                          <div class="row g-0 w-100">
                                              <div class="col-6">
                                                <h4 class="mb-2" style="margin-top: 25px; text-align: center;">Welcome, Administrator</h4>
                                                </div>
                                              <div class="col-6 align-self-end text-end">
                                               <img src="img/customer-support.jpg" alt="" class="img-fluid illustration-img">
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-12 col-md-6 d-flex">
                                  <div class="card flex-fill border-0">
                                      <div class="card-body py-4">
                                          <div class="d-flex align-items-start">
                                              <div class="flex-grow-1">
                                              <h4 class="mb-2">
                                               Usuarios Registrados
                                              </h4>
                                              <p class="mb-2">
                                                Total: 300                              </p>
                                               <div class="mb-0">
                                                 <span class="badge text-success me-2">
                                                   100%
                                                 </span>
                                                 <span class="text-muted">
                                                   Since Last Month
                                                 </span>
                                               </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <!-- Table Element -->
                            <div class="card border-0 text-center">
                                <div class="card-header">
                                  <h5 class="card-title" style="color: #000000;">Employee Information</h5>
                                  <h6 class="card-subtitle text-muted">
                                    In this section you can see the Employees And Modify them
                                  </h6>
                                </div>
                                <div class="card-body">
                                   <table class="table">
                              <thead class="bg-dark">
                            <tr>
                              <th scope="col-2">#</th>
                              <th scope="col" >Primer Nombre</th>
                              <th scope="col">Otros Nombres</th>
                              <th scope="col">Primer Apellido</th>
                              <th scope="col">Segundo Apellido</th>
                              <th scope="col">Tipo de Identificacion</th>
                              <th scope="col">Numero de Identificacion</th>
                              <th scope="col">Pais de Empleo</th>
                              <th scope="col">Correo Electronico</th>
                               <th scope="col">Fecha Ingreso</th>
                                <th scope="col">Area</th>
                              <th scope="col">Actions</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php 
                               include 'modelo/conexion.php';
                               $sql = $conexion->query("select * from datos1");
                               while ($resultado = $sql->fetch_object()) {
                                 
                               ?>
                               <tr>
                              <th><?= $resultado->id  ?></th>
                              <td> <?= $resultado->Primer_Nombre  ?></td>
                              <td> <?= $resultado->Otros_Nombre  ?></td>
                              <td> <?= $resultado->Primer_Apellido  ?></td>
                              <td> <?= $resultado->Segundo_Apellido  ?></td>
                              <td> <?= $resultado->Tipos_identificacion?></td>
                              <td> <?= $resultado->Numero_identificacion?></td>
                              <td> <?= $resultado->Pais_Empleo?></td>
                              <td> <?= $resultado->Email ?></td> 
                               <td> <?= $resultado->Fecha_Ingreso ?></td> 
                               <td> <?= $resultado->Area?></td>                                     
                              <td class="col-2">                               
                                <a href="" class="btn btn-sm btn-warning"><i class="bi bi-pencil-square"></i></a>
                              
                                 <!-- Button trigger modal -->
                                   <a href="" type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class="bi bi-trash"></i></a>
                                 <div>

                                <!-- Modal -->
                                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                  <div class="modal-dialog">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                       
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                      </div>
                                      <div class="modal-body">
                                        <i class="bi bi-exclamation-circle" style="font-size:18em; color: #F7BB4A"></i>
                                         <h1 class="modal-title fs-5" id="staticBackdropLabel" style="margin-top: -35px;padding: 10px;">Are you sure you want to delete this employer??</h1>
                                         <p class="">This operation will be irreversible</p>
                                      </div>
                                      <div class="modal-footer text-center fs-5">
                                        <button type="button" class="btn btn-primary">YES, DELETE!</button>
                                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">CANCELAR</button>
                                      </div>
                                    </div>
                                  </div>
                                </div>

                               </div>
                              </td>
                            </tr>
                            <?php 
                              }
                             ?>
                            
                            </tbody>
                        </table>
                        </div>
                    </div>
                    </div>
              
                  </div>
                </div>
          </main>   
         
        </div>
         
    <!-- Modal -->
   <!-- Button trigger modal -->

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
                 <div class="col-2 text-start">
                   <p class="mb-0">
                     <a href="#" class="text-muted">
                       <strong>Global Tecnologia</strong>
                     </a>
                   </p>
                 </div>
                 <div class="col-10 text-center">
                   <p class="mb-0">
                     <a href="#" class="text-muted">
                       <strong>GlobalTec &copy;2024 Todos los Derechos Reservados</strong>
                     </a>
                   </p>
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