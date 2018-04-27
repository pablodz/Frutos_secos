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
                              
                              $sql = "SELECT id, m1, m2,m3,f FROM maquina.motores";
                              $result = $conn->query($sql);
                              
                              if ($result->num_rows > 0) {
                                  // output data of each row
                                  while($row = $result->fetch_assoc()) {
                                      echo "Motor 1: " . $row["m1"]. "<br>Motor 2:" . $row["m2"]."<br>Motor 3:" . $row["m3"]."<br>Fecha:" . $row["f"] ;
                                  }
                              } else {
                                  echo "Sin resultados, no se encontró nada";
                              }
                              $conn->close();
                              ?>   