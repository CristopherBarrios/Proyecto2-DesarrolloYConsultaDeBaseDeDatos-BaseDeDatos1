<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Hospital</title>

    <link rel="apple-touch-icon" sizes="180x180" href="../../img/fav/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../../img/fav/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../../img/fav/favicon-16x16.png">
    <link rel="manifest" href="../../img/fav/site.webmanifest">
    

    <link rel="stylesheet" href="../../css/barra.css">
    

    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    

</head>
<body>
    <nav class="sidebar close">
        <header>
            <div class="image-text">
                <span class="image">

                </span>

                <div class="text logo-text">
                    <span class="name">Proyecto</span>
                    <span class="profession">Hospital</span>
                </div>
            </div>

            <i class='bx bx-chevron-right toggle'></i>
        </header>

        <div class="menu-bar">
            <div class="menu">
                <ul class="menu-links">
                    <li class="nav-link">
                        <a href="bar.php">
                            
                            <i class='bx bx-heart icon' ></i>
                            <span class="text ">Inicio</span>
                        </a>
                    </li>

                    <li class="search-box">
                        <a href="medicamento.php">
                            <i class='bx bx-wallet icon' ></i>
                            <span class="text nav-text">Medicamento</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="expediente.php">
                            <i class='bx bx-home-alt icon' ></i>
                            <span class="text ">Expediente</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="mantenimiento.php">
                            <i class='bx bx-bar-chart-alt-2 icon' ></i>
                            <span class="text nav-text">Mantenimiento</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="admin.php">
                            <i class='bx bx-pie-chart-alt icon' ></i>
                            <span class="text nav-text">Reporteria</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bx-bell icon'></i>
                            <span class="text nav-text">Analytics</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="#">
                        <i class='bx bx-search icon'></i>
                            <span class="text nav-text">Likes</span>
                        </a>
                    </li>



                </ul>
            </div>

            <div class="bottom-content">
                <li class="">
                    <a href="../../../index.php">
                        <i class='bx bx-log-out icon' ></i>
                        <span class="text nav-text">Logout</span>
                    </a>
                </li>

                <li class="mode">
                    <div class="sun-moon">
                        <i class='bx bx-moon icon moon'></i>
                        <i class='bx bx-sun icon sun'></i>
                    </div>
                    <span class="mode-text text">Dark mode</span>

                    <div class="toggle-switch">
                        <span class="switch"></span>
                    </div>
                </li>
                
            </div>
        </div>

    </nav>

    <section class="home">
        <div class="text">Medicamento</div>

        <div class="">
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="form-container2">
                    <h2 class="form-title">Medicamentos</h2>
                    <table>
                        <tr>
                            <td>
                                <div class="form-group">
                                    <label for="doc_name">Establecimiento</label>
                                    <select required name="opcion" class="form-control">
                                        <option hidden value="Escoja">Selecciona una opción</option>
									<?php
									require('../../php/conectar/conexion.php');
									$res2 =  pg_query($con,"SELECT * FROM establecimiento ORDER BY estab_id ASC");
									while($row2 = pg_fetch_array($res2))
									{
										?>
										<option value="<?php echo $row2['estab_id']?>"> <?php echo $row2['nombre'];?></option>";
										<?php 
									} ?>
								</select>
                                </div>
                            </td>                            
                            <td colspan="2">
                                <div class="form-group">
                                    <input name="submit" type="submit" class="btn btn-primary" value="Buscar">
                                </div>
                            </td>
                        </tr>
                    </table>
                </div>
            </form>
        </div>
        <style>
        .mi-tabla {
            table-layout: fixed;
            width: 100%;
            border-collapse: collapse;

        }

        .mi-tabla td, .mi-tabla th {
            width: 25%;
            padding: 10px;
            word-wrap: break-word;
            border-bottom: 1px solid gray;
            text-align: center; /* centrar horizontalmente */
            vertical-align: middle; /* centrar verticalmente */
        }

        .mi-tabla th {
            font-weight: bold;
        }

        .mi-tabla-alerta{
            table-layout: fixed;
            border-collapse: collapse;
        }

        </style>
        <div class="separacion">
            <?php
                require('../../php/conectar/conexion.php');
                    
                // Verificar si se envió el formulario
                if (!isset($_POST['submit'])) {
                    // Consulta SQL por defecto, sin filtrar por establecimiento
                    $sql = "SELECT establecimiento.nombre as establecimiento, insumos.nombre as insumos, inventario.cantidad, inventario.caduca, CASE WHEN caduca <= NOW() THEN 'Vencido' WHEN caduca <= NOW() + INTERVAL '1 month' THEN 'Por vencer pronto' ELSE '' END AS estado FROM inventario JOIN establecimiento ON inventario.establecimiento = establecimiento.estab_id JOIN insumos ON inventario.insumos = insumos.insumo_id WHERE caduca <= NOW() OR caduca <= NOW() + INTERVAL '1 month';";
                    } 
                else {
                    $establecimiento =$_POST['opcion'];
                    // Obtener el valor seleccionado en el menú desplegable
                    if ($establecimiento !="Escoja"){// Modificar la consulta SQL para incluir la cláusula WHERE
                        $sql = "SELECT establecimiento.nombre as establecimiento, insumos.nombre as insumos, inventario.cantidad, inventario.caduca, CASE WHEN caduca <= NOW() THEN 'Vencido' WHEN caduca <= NOW() + INTERVAL '1 month' THEN 'Por vencer pronto' ELSE '' END AS estado FROM inventario JOIN establecimiento ON inventario.establecimiento = establecimiento.estab_id JOIN insumos ON inventario.insumos = insumos.insumo_id WHERE (caduca <= NOW() OR caduca <= NOW() + INTERVAL '1 month') AND establecimiento.estab_id = $establecimiento;";
                    }
                    else{
                        $sql = "SELECT establecimiento.nombre as establecimiento, insumos.nombre as insumos, inventario.cantidad, inventario.caduca, CASE WHEN caduca <= NOW() THEN 'Vencido' WHEN caduca <= NOW() + INTERVAL '1 month' THEN 'Por vencer pronto' ELSE '' END AS estado FROM inventario JOIN establecimiento ON inventario.establecimiento = establecimiento.estab_id JOIN insumos ON inventario.insumos = insumos.insumo_id WHERE caduca <= NOW() OR caduca <= NOW() + INTERVAL '1 month';";
                    }
                }

                $res =  pg_query($con,$sql);
                
            ?>
            <div class="form-container2">
                <h2 class="form-title">Medicamento vencido/por vencer</h2>
                
                <table class="mi-tabla">
                    <thead>
                        <tr class="bg-primary titulo">
                            <th>Establecimiento</th>
				            <th>Insumos</th>
				            <th>Cantidad</th>
				            <th>Caduca</th>
                            <th>Estado</th>
                        </tr>
                    </thead>
                    <?php
                    while($row = pg_fetch_array($res)){
                        $fecha1=$row['caduca'];
                        $fecha2=date("d-m-Y",strtotime($fecha1));
                        echo "
                        <tr>
                            <td>".$row['establecimiento']."</td>
                            <td>".$row['insumos']."</td>
                            <td>".$row['cantidad']."</td>
                            <td>".$fecha2. "</td>
                            <td>".$row['estado']."</td>
                        </tr>";
                    }
                    ?>
                </table>
            </div>
        </div>


        <div class="separacion">
            <?php
                require('../../php/conectar/conexion.php');
                // Verificar si se envió el formulario
                if (!isset($_POST['submit'])) {
                    // Consulta SQL por defecto, sin filtrar por establecimiento
                    $sql = "SELECT establecimiento.nombre as establecimiento, insumos.nombre as  insumos , inventario.cantidad, inventario.caduca, case when cantidad <=5 then 'Últimas unidades' when (cantidad > 5 and cantidad <=15) then 'Pocas unidades' ELSE '' END AS estado FROM inventario JOIN establecimiento ON inventario.establecimiento = establecimiento.estab_id JOIN insumos ON inventario.insumos = insumos.insumo_id WHERE cantidad <=15;";
                    } 
                else {
                    $establecimiento =$_POST['opcion'];
                    // Obtener el valor seleccionado en el menú desplegable
                    if ($establecimiento != "Escoja"){// Modificar la consulta SQL para incluir la cláusula WHERE
                        $sql = "SELECT establecimiento.nombre as establecimiento, insumos.nombre as  insumos , inventario.cantidad, inventario.caduca, case when cantidad <=5 then 'Últimas unidades' when (cantidad > 5 and cantidad <=15) then 'Pocas unidades' ELSE '' END AS estado FROM inventario JOIN establecimiento ON inventario.establecimiento = establecimiento.estab_id JOIN insumos ON inventario.insumos = insumos.insumo_id WHERE (cantidad <=15) AND establecimiento.estab_id = $establecimiento;";
                    }
                    else{
                        $sql = "SELECT establecimiento.nombre as establecimiento, insumos.nombre as  insumos , inventario.cantidad, inventario.caduca, case when cantidad <=5 then 'Últimas unidades' when (cantidad > 5 and cantidad <=15) then 'Pocas unidades' ELSE '' END AS estado FROM inventario JOIN establecimiento ON inventario.establecimiento = establecimiento.estab_id JOIN insumos ON inventario.insumos = insumos.insumo_id WHERE cantidad <=15;";
                    }
                }

                $res =  pg_query($con,$sql);
            ?>
            <div class="form-container2">
                <h2 class="form-title">Medicamento con poco stock</h2>
                <table class="mi-tabla">
                    <thead>
                        <tr class="bg-primary titulo">
                            <th>Establecimiento</th>
				            <th>Insumos</th>
				            <th>Cantidad</th>
				            <th>Caduca</th>
                            <th>Estado</th>
                        </tr>
                    </thead>
                    <?php
                    while($row = pg_fetch_array($res)){
                        $fecha1=$row['caduca'];
                        $fecha2=date("d-m-Y",strtotime($fecha1));
                        echo "
                        <tr>
                            <td>".$row['establecimiento']."</td>
                            <td>".$row['insumos']."</td>
                            <td>".$row['cantidad']."</td>
                            <td>".$fecha2. "</td>
                            <td>".$row['estado']."</td>
                        </tr>";
                    }
                    ?>
                </table>
            </div>
        </div>



        <div class="separacion">
            <?php
                require('../../php/conectar/conexion.php');
                // Verificar si se envió el formulario
                if (!isset($_POST['submit'])) {
                    // Consulta SQL por defecto, sin filtrar por establecimiento
                    $sql = "SELECT establecimiento.nombre as establecimiento, insumos.nombre as  insumos , inventario.cantidad, inventario.caduca, case when cantidad <=5 then 'Últimas unidades' when (cantidad > 5 and cantidad <=15) then 'Pocas unidades' ELSE '' END AS estado FROM inventario JOIN establecimiento ON inventario.establecimiento = establecimiento.estab_id JOIN insumos ON inventario.insumos = insumos.insumo_id WHERE cantidad <=15;";
                    } 
                else {
                    $establecimiento =$_POST['opcion'];
                    // Obtener el valor seleccionado en el menú desplegable
                    if ($establecimiento != "Escoja"){// Modificar la consulta SQL para incluir la cláusula WHERE
                        $sql = "SELECT establecimiento.nombre as establecimiento, insumos.nombre as  insumos , inventario.cantidad, inventario.caduca, case when cantidad <=5 then 'Últimas unidades' when (cantidad > 5 and cantidad <=15) then 'Pocas unidades' ELSE '' END AS estado FROM inventario JOIN establecimiento ON inventario.establecimiento = establecimiento.estab_id JOIN insumos ON inventario.insumos = insumos.insumo_id WHERE (cantidad <=15) AND establecimiento.estab_id = $establecimiento;";
                    }
                    else{
                        $sql = "SELECT establecimiento.nombre as establecimiento, insumos.nombre as  insumos , inventario.cantidad, inventario.caduca, case when cantidad <=5 then 'Últimas unidades' when (cantidad > 5 and cantidad <=15) then 'Pocas unidades' ELSE '' END AS estado FROM inventario JOIN establecimiento ON inventario.establecimiento = establecimiento.estab_id JOIN insumos ON inventario.insumos = insumos.insumo_id WHERE cantidad <=15;";
                    }
                }

                $res =  pg_query($con,$sql);
            ?>
            <div class="form-container2">
                <h2 class="form-title">Alerta</h2>
                            
                <?php
                $row2 = pg_fetch_array($res);
                if (is_array($row2)) {
                    // Acceder al elemento del array
                    echo "En el establecimiento " , $row2['establecimiento'] , " se necesitan los siguientes medicamentos:" ;
                }
                else {
                    echo "El establecimiento seleccionado no tiene poco stock de medicamentos";
                }
                                
                ?>
                            
                <br><br>
                <table class="mi-tabla-alerta">
                    <thead>
                        <tr class="bg-primary titulo">
                            <th>CON URGENCIA ÚLTIMAS UNIDADES:</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        // Reiniciar el cursor de la consulta
                        pg_result_seek($res, 0);
                        while($row = pg_fetch_array($res)){
                            if ($row['estado'] == "Últimas unidades"){
                                echo "<tr><td>".$row['insumos']."</td></tr>";
                            }
                        }
                        ?>
                    </tbody>
                </table>

                <table class="mi-tabla-alerta">
                    <thead>                  
                        <tr class="bg-primary titulo">
                            <br>
                            <th>POCAS UNIDADES:</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        // Reiniciar el cursor de la consulta
                        pg_result_seek($res, 0);
                        while($row = pg_fetch_array($res)){
                            if ($row['estado'] == "Pocas unidades"){
                                echo "<tr><td>".$row['insumos']."</td></tr>";
                            }
                        }
                        ?>
                    </tbody>
                </table>
            </div>

        </div>
    </section>

    <script>
        const body = document.querySelector('body'),
      sidebar = body.querySelector('nav'),
      toggle = body.querySelector(".toggle"),
      searchBtn = body.querySelector(".search-box"),
      modeSwitch = body.querySelector(".toggle-switch"),
      modeText = body.querySelector(".mode-text");


toggle.addEventListener("click" , () =>{
    sidebar.classList.toggle("close");
})

searchBtn.addEventListener("click" , () =>{
    sidebar.classList.remove("close");
})

modeSwitch.addEventListener("click" , () =>{
    body.classList.toggle("dark");
    
    if(body.classList.contains("dark")){
        modeText.innerText = "Dark mode";
    }else{
        modeText.innerText = "Light mode";
        
    }
});
    </script>

</body>
</html>