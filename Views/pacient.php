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

                    <button type="submit" class="btn btn-primary float-left" onclick="location.href='user_panel.php'"><<</button>
                    <form action="new_meeting.php">
                    <span class="titlespan"><?php echo $parameters['client']; ?> </span>
                    <button type="submit" class="btn btn-primary float-right" name="client" value=<?php echo "'".$parameters['client']."'" ?>>Nueva reunion</button>
                    </form>
                    <hr>
                    <div class="container inner rounded ">
                        <br>
                        <h4>Reuniones</h4><br>
                    <table class="table table-striped table-hover bg-white">
                         <thead class="thead">
                            <tr>
                            <th scope="col">#</th>

                            <th scope="col">Inicio</th>
                            <th scope="col">Fin</th>
                            <th scope="col"></th>
                            </tr>
                        </thead> 
                        <tbody>
                            <form action="profesional_meeting.php" method="post">
                                <tr>
                                <th scope="row">1</th>
                                <td>12:00</td>
                                <td>13:30</td>
                                <td><button type="submit" name="client" value=<?php echo "'".$parameters['client']."'" ?> class="btn btn-sm btn-outline-secondary float-right">Ingresar</button></td>
                                </tr>
                            </form>
                            <form action="profesional_meeting.php" method="post">
                                <tr>
                                <th scope="row">2</th>
                                <td>16:00</td>
                                <td>17:00</td>
                                <td><button type="submit" name="client" value=<?php echo "'".$parameters['client']."'" ?> class="btn btn-sm btn-outline-secondary float-right">Ingresar</button></td>
                                </tr>
                            </form>
                            <form action="profesional_meeting.php" method="post">
                                <tr>
                                <th scope="row">3</th>
                                <td>18:00</td>
                                <td>19:00</td>
                                <td><button type="submit" name="client" value=<?php echo "'".$parameters['client']."'" ?> class="btn btn-sm btn-outline-secondary float-right">Ingresar</button></td>
                                </tr>
                            </form>
                        </tbody>
                    </table>
                    </div>
                </div>
            </section>
            
            </div>
            
        

    </body>
</html>