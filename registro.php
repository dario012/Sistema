  <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <script type="text/javascript" href="js/funcion.js"></script>
    <link rel="stylesheet" type="text/css" href="css/estilos.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
    <!-- <link rel="stylesheet" href="css/all.min.css"> -->
    <!-- <link rel="stylesheet" href="css/fontawesome.min.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>GLobal Tecnologia</title>
</head>
<body>
    <div class="container fondo">
        <div class="container min-vh-100 d-flex justify-content-center align-items-center">
            <form method="POST" action="vista/registro_persona.php" class="formulario"> <?php 
                    include 'modelo/conexion.php';
                    include 'vista/registro_persona.php';
                     ?>
                <div class="text-center"><img src="img/login30.png" class="img-fluid imagen"></div>
                    <div class="text-center"><h2 class="title presentacion">Create New Account</h2> </div> 
                    <div class="form-floating mb-2">
                      <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" required="completa el campo" name="Primer_Nombre">
                      <label for="floatingInput">Primer Nombre</label>
                    </div>
                    <div class="form-floating mt-3">
                      <input type="text" class="form-control" id="floatingPassword" placeholder="Password" required="completa el campo" name="Primer_Apellido">
                        <label for="floatingPassword">Primer Apellido</label>
                      </div>
                      <div class="form-floating mt-3">
                        <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" required="completa el campo" name="Segundo_Apellido">
                        <label for="floatingInput">Segundo Apellido</label>
                      </div>
                      <div class="form-floating mt-3">
                        <input type="text" class="form-control" id="floatingPassword" placeholder="Password" required="completa el campo" name="Otros_Nombre">
                        <label for="floatingPassword">Otros Nombre</label>
                      </div>
                      <div class="form-floating mt-3"> 
                      <select class="form-select" aria-label="Default select example" name="Pais_Empleo">
                   <option selected>Seleccionar</option>
               <option>Colombia</option>
               <option>Estados Unidos</option>                           
                </select>
                <label for="floatingPassword">Pais de Empleo</label>
            </div>

            <div class="form-floating mt-3 prueba">
            <select class="form-select prueba2" aria-label="Default select example">
                   <option selected>V</option>
                   <option value="1">E</option>
                   <option value="2">P</option>
                   <option value="2">PE</option>  
                </select>
                <label for="floatingPassword">Tipo</label>
                <input type="text" class="form-control prueba1" id="floatingInput" required="completa el campo" name="Tipos_identificacion">
            </div>
            <div class="form-floating mt-3">
              <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" required="completa el campo" name="Numero_identificacion">
              <label for="floatingInput">Numero de Identificacion</label>
            </div>
            <div class="form-floating mt-3">
              <input type="email" class="form-control" id="floatingPassword" placeholder="Password" required="completa el campo" name="Email">
              <label for="floatingPassword">Correo Electronico</label>
            </div>
            <div class="form-floating  mt-3">
              <input type="date" class="form-control" id="floatingInput" min="2024-04-14" name="Fecha_Ingreso">
                <label for="floatingPassword">Fecha de Ingreso</label>
            </div>
            <div class="form-floating mt-3"> 
            <select  class="form-select" aria-label="Default select example" name="Area">
                   <option selected>Seleccionar</option>
                   <option value="1">Adminitracion</option>
                   <option value="2">Financiera</option>
                   <option value="3">Compras</option>
                    <option value="">Infraestructura</option>
                    <option value="">Operacion</option>
                    <option value="">Talento Humano</option>    
                    <option value="">Servicio Varios</option>
                </select>
                <label for="floatingPassword">Area</label>
            </div>
            <div class="form-floating mt-3">
              <input type="email" class="form-control" id="floatingInput" placeholder="Activo" disabled="">
              <label for="floatingInput">Activo</label>
            </div>
                         <div class="text-center">
                    <input name="btnregistro" class="btn btn-primary mt-3 align-items-center"  title="click para ingresar" type="submit"
                value="Registrarse"></div>
                
               <div class="text-center">
                    <p class="form-label text-center mt-2 input-field">Already Have An Account?
                    <a class="font-italic isai5" href="Index.php" class="" style="margin-left: 10px;">Login</a></p>
                        </div>
              </form>
        </div>
</div>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>
