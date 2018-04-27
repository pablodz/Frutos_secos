<!DOCTYPE html>
<html class="no-js" lang="en">
   <head>
      <!--- basic page needs
         ================================================== -->
      <meta charset="utf-8">
      <title>-XtremeSeco-</title>
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- mobile specific metas
         ================================================== -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- CSS
         ================================================== -->
      <link rel="stylesheet" href="css/base.css">
      <link rel="stylesheet" href="css/vendor.css">
      <link rel="stylesheet" href="css/main.css">
      <!-- script
         ================================================== -->
      <script src="js/modernizr.js"></script>
      <script src="js/pace.min.js"></script>
      <!-- favicons
         ================================================== -->
      <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
      <link rel="icon" href="favicon.ico" type="image/x-icon">
   </head>
   <body>
      <!-- home
         ================================================== -->
      <main class="s-home s-home--particles">
         <div id="particles-js" class="home-particles"></div>
         <div class="gradient-overlay"></div>
         <div class="home-content">
            <div class="home-logo">
               <a href="#">
               <b>MÁQUINA PARA FRUTOS SECOS</b>
               </a>
            </div>
            <div class="row home-content__main">
               <div class="col-eight home-content__text pull-right">
                  <h3>Bienvenido a nuestra plataforma de control</h3>
                  <h1>
                     Podrás utilizar el sistema de control con gran facilidad.
                  </h1>
                  
                  <div class="home-content__subscribe">
                  <table>
                     <td>    
                     <form>
                        <!-- 
                          <input style="background-color: #f44336;font-size: 15px;" type="button" value="Actualizar datos" onclick="window.location.href='actualizar.php'" />
                          -->
                          <input style="background-color: #00FF00;font-size: 15px;border: none"type="button" value="Prender motor 1 = 1" onclick="window.open('prender1.php?id=1&m1=1');" />
                        <input style="background-color: #00FF00;font-size: 15px;border: none"type="button" value="Prender motor 2 = 1" onclick="window.open('prender2.php?id=1&m2=1');" />
                        <input style="background-color: #00FF00;font-size: 15px;border: none"type="button" value="Prender motor 3,4,5= 1" onclick="window.open('prender3.php?id=1&m3=1');" />
                        <input style="background-color: #e3ff00;font-size: 15px;border: none"type="button" value="Iniciar proceso = 1" onclick="window.open('prender.php?id=1&p=1');" />
                        <input style="background-color: #00ecff;font-size: 15px;border: none"type="button" value="Detener proceso = 1" onclick="window.open('detener.php?id=1&d=1');" />
                        </form>
                     </td>
                     <td>                        
                     <form>
                        <!--
                        <input style="background-color: #f44336;font-size: 15px;" type="button" value="Sin asignar" onclick="window.location.href='actualizar.php'" />
                        -->

                         <input style="background-color: #00FF00;font-size: 15px;border: none"type="button" value="Prender motor 1 = 0" onclick="window.open('prender1.php?id=1&m1=0');" />
                        <input style="background-color: #00FF00;font-size: 15px;border: none"type="button" value="Prender motor 2 = 0" onclick="window.open('prender2.php?id=1&m2=0');" />
                        <input style="background-color: #00FF00;font-size: 15px;border: none"type="button" value="Prender motor 3,4,5 = 0" onclick="window.open('prender3.php?id=1&m3=0');" />
                        <input style="background-color: #e3ff00;font-size: 15px;border: none"type="button" value="Iniciar proceso = 0" onclick="window.open('prender.php?id=1&p=0');" />
                        <input style="background-color: #00ecff;font-size: 15px;border: none"type="button" value="Detener proceso = 0" onclick="window.open('detener.php?id=1&d=0');" />
                      </form>
                     </td>
                     <td>
                     
                     </td>
                  </table>
                  <h3>Motor 1: <br>
                  Motor 2: eje rotativo<br>
                  Motor 3,4 y 5: Faja,rodillo, rodillo</h3>
                  </div>
               </div>
               <!-- end home-content__text -->
               <div class="col-four home-content__counter">
                  <h3>Estado en la BD:</h3>
                  <div id="scores">
                      <form>
                      
                              <?php
                         
                              $servername = "35.198.14.135";
                              $username = "admin";
                              $password = "admin";
                              $dbname = "maquina";
                              
                              // Create connection
                              $conn = new mysqli($servername, $username, $password, $dbname);
                              // Check connection
                              if ($conn->connect_error) {
                                  die("Fallo la conexión de entrada. " . $conn->connect_error);
                              } 
                              
                              $sql = "SELECT id, m1, m2,m3,f,p,d FROM maquina.motores";
                              $result = $conn->query($sql);
                              
                              if ($result->num_rows > 0) {
                                  // output data of each row
                                  while($row = $result->fetch_assoc()) {
                                      echo "Motor 1: " . $row["m1"]. "<br>Motor 2:" . $row["m2"]."<br>Motor 3:" . $row["m3"]."<br>Estado (P-D):".$row["p"]."-".$row["d"]."<br>Última <br>modificación:<br>" . $row["f"] ;
                                  }
                              } else {
                                  echo "Sin resultados, no se encontró nada";
                              }
                              $conn->close();
                              ?>   


                      </form>
                      </div>
                      <h2>Tiempo funcionando</h2>
                  <div class="home-content__clock">
                     <div class="top">
                        <div class="time days">
                           7
                           <span>Days</span>
                        </div>
                     </div>
                     <div class="time hours">
                        60
                        <span>H</span>
                     </div>
                     <div class="time minutes">
                        60
                        <span>M</span>
                     </div>
                     <div class="time seconds">
                        60
                        <span>S</span>
                     </div>
                    

                  </div>
                  <!-- end home-content__clock -->
               </div>
               <!-- end home-content__counter -->
            </div>
            <!-- end home-content__main -->
            <ul class="home-social">
               <li>
                  <a href="#0"><i class="fab fa-facebook-f" aria-hidden="true"></i><span>Facebook</span></a>
               </li>
               <li>
                  <a href="#0"><i class="fab fa-twitter" aria-hidden="true"></i><span>Twiiter</span></a>
               </li>
               <li>
                  <a href="#0"><i class="fab fa-instagram" aria-hidden="true"></i><span>Instagram</span></a>
               </li>
               <li>
                  <a href="#0"><i class="fab fa-behance" aria-hidden="true"></i><span>Behance</span></a>
               </li>
               <li>
                  <a href="#0"><i class="fab fa-dribbble" aria-hidden="true"></i><span>Dribbble</span></a>
               </li>
            </ul>
            <!-- end home-social -->
            <div class="row home-copyright">
               <span>Copyright Count 2018</span> 
               <span>Diseñado por <a href="#">Styleshout</a></span>
            </div>
            <!-- end home-copyright -->
            <div class="home-content__line"></div>
         </div>
         <!-- end home-content -->
      </main>
      <!-- end s-home -->
      <!-- info
         ================================================== -->
      <a class="info-toggle" href="#0">
      <span class="info-menu-icon"></span>
      </a>
      <div class="s-info">
         <div class="row info-wrapper">
            <div class="col-seven tab-full info-main">
               <h1>Mùsica</h1>
               <!--
               <iframe width="100%" height="600" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/165018741&color=%23d42483&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true&visual=true"></iframe>
               -->
             </div>
            <div class="col-four tab-full pull-right info-contact">
               <div class="info-block">
                  <h3>Contacto</h3>
                  <p>
                     <a href="mailto:#0" class="info-email">pablo.diazv@pucp.edu.pe</a><br>
                     <a href="tel:+18587338912" class="'info-phone">+51 123456789</a>
                  </p>
               </div>
               <div class="info-block">
                  <h3>Nuestra oficina:</h3>
                  <p class="info-address">
                     En construcción :'c
                  </p>
               </div>
               <div class="info-block">
                  <h3>Búscanos en:</h3>
                  <ul class="info-social">
                     <li>
                        <a href="#0"><i class="fab fa-facebook" aria-hidden="true"></i>
                        <span>Facebook</span></a>
                     </li>
                     <li>
                        <a href="#0"><i class="fab fa-twitter" aria-hidden="true"></i>
                        <span>Twiiter</span></a>
                     </li>
                     <li>
                        <a href="#0"><i class="fab fa-instagram" aria-hidden="true"></i>
                        <span>Instagram</span></a>
                     </li>
                     <li>
                        <a href="#0"><i class="fab fa-behance" aria-hidden="true"></i>
                        <span>Behance</span></a>
                     </li>
                     <li>
                        <a href="#0"><i class="fab fa-dribbble" aria-hidden="true"></i>
                        <span>Dribbble</span></a>
                     </li>
                     
                  </ul>
               </div>
            </div>
            <!-- end info contact -->
         </div>
         <!-- end info wrapper -->
      </div>
      <!-- end s-info -->
      <!-- preloader
         ================================================== -->
      <div id="preloader">
         <div id="loader">
            <div class="line-scale-pulse-out">
               <div></div>
               <div></div>
               <div></div>
               <div></div>
               <div></div>
            </div>
         </div>
      </div>
      <!-- Java Script
         ================================================== -->
      <script src="js/jquery-3.2.1.min.js"></script>
      <script src="js/plugins.js"></script>
      <script src="js/polygons.js"></script>
      <script src="js/main.js"></script>
   </body>
</html>