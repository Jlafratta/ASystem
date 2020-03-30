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
        $section = "Videoconferencia";
        include_once('nav.php');
    ?>

    <body class="bgdark">

        <div class="container rounded my-3">
           
            <div class="container rounded shadow p-3 my-3 bg-white">

                <form action="pacient.php" method="post">
                    <span class="titlespan"><?php echo "Videoconferencia ".$parameters['client']; ?> </span>
                    <button type="submit" class="btn btn-primary float-left" name="client" value=<?php echo "'".$parameters['client']."'" ?>><<</button>
                </form>

                    <div class="container rounded shadow"> <!-- Container Zoom -->

                        <br>
                        <div class="iframe-container" style="overflow: hidden; padding-top: 56.25%; position: relative;">

                        <iframe allow="microphone; camera" style="border: 0; height: 100%; left: 0; position: absolute; top: 0; width: 100%;" 
                        sandbox="allow-forms allow-scripts allow-same-origin" src="https://zoom.us/wc/2413279838/join?prefer=1&un=admin" frameborder="0"></iframe>
                        <br><br>
                        </div>
                        
                    </div>
                
            </div>
        </div>

        <div class="container">

            <aside>
                <div class="container asideDev shadow rounded p-3 my-3 bg-white">
                    <span class="titlespan">Historia Evolucion</span>
                    <hr>
                    <div class="container inner rounded bg-white ">
                        
                        <?php include_once('table_evoluciones.php') ?>
                    
                    </div>
                </div>
            </aside>

            <section>
                <div class="container rounded sectionDev shadow p-3 my-3 bg-white">  <!-- Container devolucion ext -->
               
                    <span class="titlespan"><?php echo "Devolución sobre ".$parameters['client']; ?> </span> <!--  Titulo -->
                    <hr>

                    <div class="container innerNoScroll rounded"> <!-- Container devolucion int -->

                        <form action="">
                            <div class="form-group">
                                <label for="txtarea">Escriba a continuación la devolucion que hará sobre el paciente</label>
                                <textarea class="form-control" id="txtarea" rows="5" style="resize:none";></textarea>
                            </div>
                        </form>
                    
                        <aside>
                            <div class="container rounded shadow p-3 my-3 bg-white">  <!-- Container recetas -->
                                <span class="titlespan">Recetas</span>
                                <button type="submit" class="btn btn-outline-primary btn-sm float-right " onclick="location.href='user_panel.php'"> + </button>
                                <hr>
                                <div class="container inner recipe rounded bg-white">
                                    <?php include_once('table_recetas.php') ?>
                                </div>
                                
                            </div> <!-- Fin container recetas -->
                            
                        </aside>
                        
                        <section>
                            <div class="container rounded extraDev shadow p-3 my-3 bg-white">  <!-- Container devolucion ext -->
                            
                                <div class="form-group">
                                    <label for="txtarea">Observaciones adicionales (opcional)</label>
                                    <textarea class="form-control" id="txtarea" rows="6" style="resize:none";></textarea>
                                    <br>
                                    <button type="submit" class="btn btn-primary float-right " onclick="location.href='user_panel.php'">Finalizar</button>
                                    <br>
                                </div>
                                
                            
                            
                        </div>
                        </section>
                        
                    </div><!-- Fin container devolucion int -->
                    
                </div><!-- Fin container devolucion ext -->
                
            </section>
            
        </div>
            
        

    </body>

</html>