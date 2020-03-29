<html>

<?php
    $parameters = array();

    if ($_SERVER['REQUEST_METHOD'] == "POST")
        $parameters = $_POST;
    else
        $parameters = $_GET;
?>

    <?php 
        include_once('header.php');
        $section = "Paciente";
        include_once('nav.php');
    ?>

    <body class="bgdark">

            <div class="container rounded my-3 ">

            <aside>
                <div class="container rounded p-3 my-3 bg-white">
                    <span class="titlespan">Pacientes</span>
                    
                    <hr>
                    <div class="container inner rounded bg-white">
                        <br>
                        <?php include_once('table.php') ?>
                    </div>
                </div>
            </aside>

            <section>
                <div class="container rounded p-3 my-3 bg-white">
               
                    
                    <span class="titlespan"><?php echo $parameters['client']; ?> </span>
                    <button type="submit" class="btn btn-primary float-left" onclick="location.href='user_panel.php'"><<</button>
                    <hr>
                    <div class="container inner rounded ">
                        <br>
                        <h4>Crear nueva reunion</h4><br>
                    <form action="pacient.php" method="POST">
                    <table class="table table-striped table-hover bg-white">
                         <thead class="thead">
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Dia</th>
                            <th scope="col">Inicio</th>
                            <th scope="col">Fin</th>
                            <th scope="col"></th>
                            </tr>
                        </thead> 
                        <tbody>
                            <tr>
                            <th scope="row">1</th>
                            <th><input type="date"></th>
                            <td><input type="time"></td>
                            <td><input type="time"></td>
                            <td><button type="submit" class="btn btn-sm btn-outline-secondary float-right" name="client" value=<?php echo "'".$parameters['client']."'" ?>>Crear</button></td>
                            </tr>
                            
                        </tbody>
                    </table>
                    </form>
                    </div>
                </div>
            </section>
            
            </div>
            
        

    </body>
</html>