<html>

    <?php 
    
        include_once('header.php');
        $section = "Inicio";
        include_once('nav.php');
    ?>

    <body class="bgdark">






        <div class="container rounded my-3">
           
        
                <div class="container rounded p-3 my-3 bg-white">
               
                    
                    <span class="titlespan"><?php echo(date("l d/m",time())); ?> </span>
                    
                    <hr>
                    <div class="container inner rounded ">
                        <br>
                    <table class="table table-striped table-hover bg-white">
                        <thead class="thead-dark">
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Paciente</th>
                            <th scope="col">Hora</th>
                            <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <th scope="row">1</th>
                            <td>Bazan, Martin</td>
                            <td>12:00</td>
                            <td><button type="submit" class="btn btn-sm btn-outline-secondary float-right">Ingresar</button></td>
                            </tr>
                            <tr>
                            <th scope="row">2</th>
                            <td>Costas, Sebastian</td>
                            <td>16:00</td>
                            <td><button type="submit" class="btn btn-sm btn-outline-secondary float-right">Ingresar</button></td>
                            </tr>
                            <tr>
                            <th scope="row">3</th>
                            <td>Alvarez, Jose</td>
                            <td>18:00</td>
                            <td><button type="submit" class="btn btn-sm btn-outline-secondary float-right">Ingresar</button></td>
                            </tr>
                        </tbody>
                    </table>
                    </div>
                </div>
            
        </div>




            <div class="container rounded my-3 ">

            <aside>
                <div class="container rounded p-3 my-3 bg-white">
                    <span class="titlespan">Historia Evolucion</span>
                    <hr>
                    <div class="container inner rounded bg-white">
                        <br>
                    <?php include_once('table_evoluciones.php') ?>
                    </div>
                </div>
            </aside>

            <section>
                <div class="container rounded p-3 my-3 bg-white">
               
                    
                    <span class="titlespan"><?php echo(date("l d/m",time())); ?> </span>
                    
                    <hr>
                    <div class="container inner rounded ">
                        <br>
                    <table class="table table-striped table-hover bg-white">
                        <thead class="thead-dark">
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Paciente</th>
                            <th scope="col">Hora</th>
                            <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <th scope="row">1</th>
                            <td>Bazan, Martin</td>
                            <td>12:00</td>
                            <td><button type="submit" class="btn btn-sm btn-outline-secondary float-right">Ingresar</button></td>
                            </tr>
                            <tr>
                            <th scope="row">2</th>
                            <td>Costas, Sebastian</td>
                            <td>16:00</td>
                            <td><button type="submit" class="btn btn-sm btn-outline-secondary float-right">Ingresar</button></td>
                            </tr>
                            <tr>
                            <th scope="row">3</th>
                            <td>Alvarez, Jose</td>
                            <td>18:00</td>
                            <td><button type="submit" class="btn btn-sm btn-outline-secondary float-right">Ingresar</button></td>
                            </tr>
                        </tbody>
                    </table>
                    </div>
                </div>
            </section>
            
            </div>
            
        

    </body>
</html>