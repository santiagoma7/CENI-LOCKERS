<?php
include('../PHP/Funciones.php');



InicioSesion();
Inactividad(1800);
if (isset($_GET['cerrar_sesion'])) {
    cerrarSesion();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>CeniLockers</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="estilo.css">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="estilo.css">
    <meta charset="UTF-8">
</head>
<body>
    <header>
        <div class="container">
            <p class="logo">Cenilockers!</p>
            <nav>
                <a href="#container"> Contáctenos</a>
                <a href="../Soporte/index.php">Soporte</a>
                <a href="../reportes/index.php">Reportes</a>
                <a href="../cancelacion/cancelacionn.php">Cancelación</a>
                <a href="?cerrar_sesion=1">Cerrar Sesión</a>

            </nav>
        </div>
    </header>




<!-- MODALES BOTONES -->
<section id="hero">
    <div class="container">
    
  
  <!-- Modal -->
 
    
    <button type="button" id="s5" class="btn btn-custom5 " data-toggle="modal" data-target="#myModal5">
            sección 5
        </button>

    <button type="button" id="s4" class="btn btn-primary" data-toggle="modal" data-target="#myModal4">
            sección 4
        </button>
   
    <button type="button" id="s3" class="btn btn-primary" data-toggle="modal" data-target="#myModal3">
            sección 3
        </button>
    
    <button type="button" id="s2" class="btn btn-primary" data-toggle="modal" data-target="#myModal2">
            sección 2
        </button>
    
    <button type="button" id="s1" class="btn btn-primary" data-toggle="modal" data-target="#myModal1">
            sección 1
        </button>
   
    <button type="button" id="s6" class="btn btn-primary" data-toggle="modal" data-target="#myModal6">
            sección 6
        </button>
    
    <button type="button" id="s7" class="btn btn-primary" data-toggle="modal" data-target="#myModal7">
            sección 7
        </button>
</section>
        




<div class="modal fade" id="myModal5">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Sección 5</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
        <form method="post" action="../mapa/reserva.php">
                    <label for="numberSelect">Selecciona tu casillero</label>
                    <select id="numberSelect" name="locker" class="form-control">
                        <?php
                            for ($i = 76; $i <= 120; $i++) {
                                echo "<option value='$i'>$i</option>";
                            }
                        ?>
                    </select>
                    <br>
                    <button type="submit" class="btn btn-primary">Aceptar</button>
                </form>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
        </div>
        
      </div>
    </div>
  </div>
  

  <div class="modal fade" id="myModal4">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Sección 4</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
        <form method="post" action="../mapa/reserva.php">
                    <label for="numberSelect">Selecciona tu casillero</label>
                    <select id="numberSelect" name="locker" class="form-control">
                        <?php
                            for ($i = 121; $i <= 480; $i++) {
                                echo "<option value='$i'>$i</option>";
                            }
                        ?>
                    </select>
                    <br>
                    <button type="submit" class="btn btn-primary">Aceptar</button>
                </form>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
        </div>
        
      </div>
    </div>
  </div>


  <div class="modal fade" id="myModal3">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Sección 3</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
        <form method="post" action="../mapa/reserva.php">
                    <label for="numberSelect">Selecciona tu casillero</label>
                    <select id="numberSelect" name="locker" class="form-control">
                        <?php
                            for ($i = 1; $i <= 75; $i++) {
                                echo "<option value='$i'>$i</option>";
                            }
                        ?>
                    </select>
                    <br>
                    <button type="submit" class="btn btn-primary">Aceptar</button>
                </form>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
        </div>
        
      </div>
    </div>
  </div>


  <div class="modal fade" id="myModal2">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Sección 2</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
        <form method="post" action="../mapa/reserva.php">
                    <label for="numberSelect">Selecciona tu casillero</label>
                    <select id="numberSelect" name="locker" class="form-control">
                        <?php
                            for ($i = 166; $i <= 315; $i++) {
                                echo "<option value='$i'>$i</option>";
                            }
                        ?>
                    </select>
                    <br>
                    <button type="submit" class="btn btn-primary">Aceptar</button>
                </form>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
        </div>
        
      </div>
    </div>
  </div>


  <div class="modal fade" id="myModal1">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Sección 1</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
        <form method="post" action="../mapa/reserva.php">
                    <label for="numberSelect">Selecciona tu casillero</label>
                    <select id="numberSelect" name="locker" class="form-control">
                        <?php
                            for ($i = 316; $i <= 435; $i++) {
                                echo "<option value='$i'>$i</option>";
                            }
                        ?>
                    </select>
                    <br>
                    <button type="submit" class="btn btn-primary">Aceptar</button>
                </form>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrrar</button>
            </div>

        </div>
    </div>
</div>






        </div>
        
        
        
      </div>
    </div>
  </div>



  <div class="modal fade" id="myModal6">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Seccion 6</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
        <form method="post" action="../mapa/reserva.php">
                    <label for="numberSelect">Selecciona tu casillero</label>
                    <select id="numberSelect" name="locker" class="form-control">
                        <?php
                            for ($i = 436; $i <= 465; $i++) {
                                echo "<option value='$i'>$i</option>";
                            }
                        ?>
                    </select>
                    <br>
                    <button type="submit" class="btn btn-primary">Aceptar</button>
                </form>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
        </div>
        
      </div>
    </div>
  </div>


  <div class="modal fade" id="myModal7">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header" id="s7" >
          <h4 class="modal-title" >Sección 7</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
        <form method="post" action="../mapa/reserva.php">
                    <label for="numberSelect">Selecciona tu casillero</label>
                    <select id="numberSelect" name="locker" class="form-control">
                        <?php
                            for ($i = 466; $i <= 480; $i++) {
                                echo "<option value='$i'>$i</option>";
                            }
                        ?>
                    </select>
                    <br>
                    <button type="submit" class="btn btn-primary">Aceptar</button>
                </form>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
        </div>
        
      </div>
    </div>
  </div>








</div>






















    <section id="somos-proya">
        <div class="container">
            <div class="img-container"></div>
            <div class="texto">

                <h2>Somos <span class="color-acento">CeniLockers!</span></h2>
                <p>Cenilockers es el resultado de la mente creativa de cinco estudiantes apasionados por 
                    la programación de software.Nuestro proyecto fue creado para dar solución a un problema rutinario que afecta 
                    a todos los aprendices en nuestra sede, que dia dia lidian con esta problematica la cual causa retrasos e inconformidad, es por esto que estamos
                    comprometidos con el bienestar de todos los estudiantes y hacer de su sede un lugar mucho mas agradable.
                  

                </p>
            </div>
        </div>
    </section>

    <section id="nuestros-programas">
        <div class="container">
            <h2>Nuestros servicios</h2>
            <div class="programas">
                <div class="carta">
                    <h3>Reserva</h3>
                    <br>
                    <p>La principal razón de nuestro proyecto es brindar a los aprendices la facilidad de reservar un locker, para que asi se reduzca el tiempo que gasta en buscar un casillero disponible que en muchos casos esta busqueda es en vano.</p>
                    <button><a href="#hero">Reserva ya</button></a>
                </div>
                <div class="carta">
                    <h3>Administración</h3>
                    <br>
                    <p>Hemos creado cenilockers no solo para hacer la vida de los aprendices un poco mas sencilla,si no para que los administradores de nuestra sede tengan a la mano el estado de los casilleros, asi mismo se tenga en cuenta información de la persona que tiene guardas sus pertenencias y asi tener una correcta administración de quien ocupa un casillero para poder solucionar problemas</p>
                    <button><a href="../Soporte/index.php">Reportes</button></a>
                </div>
                <div class="carta">
                    <h3>Reporte</h3>
                    <br>
                    <p>Estamos comprometidos con el binestar y el sentido de pertenencia por nuestra institución es por esto que tanto aprendices y administradores pueden hacer el reporte de los casilleros averiados, permitiendonos saber el estado de nuestros lockers .</p>
                    <button><a href="../reportes/index.php">Reportes</button></a>
                </div>  
            </div>
        </div>
    </section>

    <section id="caracteristicas">
        <div class="container">
            <ul>
                <li>✔️ 100% online</li>
                <li>✔️ Disponible en todas las jornadas</li>
                <li>✔️ Soporte 1:1</li>
                <li>✔️ Asistencia </li>
            </ul>
        </div>
    </section>

    <section id="final">
        <h2>¿Listo para reservar?</h2>
        <button><a href="#hero">RESERVA YA!</a></button>
    </section>

    <footer>
        <div class="container" id="container">
            <p>Linea gratuita 018000000-0000<br>
                Correo:LockersCenigraf@soy.sena.edu.co <br>
                Direccion:Cl. 15 #31-42, Bogotá<br>
                Servicio al cliente: 311 295 77 08
                &copy; CeniLockers!</p>
        </div>
    </footer>
    <br>

   



    <script src="javas.js">
        
    </script>
</body>
</html>
