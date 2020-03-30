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
        $section = "Devolución";
        include_once('nav.php');
    ?>

    <body class="bgdark">

        <div class="container rounded my-3">
           
            <div class="container rounded shadow p-3 my-3 bg-white">

                <form action="profesional_meeting.php" method="post">
                    <span class="titlespan"><?php echo "Devolución paciente ".$parameters['client']; ?></span>
                    <button type="submit" class="btn btn-primary float-left" name="client" value=<?php echo "'".$parameters['client']."'" ?>><<</button>
                    <br><br>
                </form>

                    <div class="container extradev rounded shadow"> <!-- Container Zoom -->
                    <br>
                        <span class="devtext"> Espacio asignado a la devolucion del paciente.</span>
                        <br>
                        <div class="iframe-container" style="overflow: hidden; padding-top: 56.25%; position: relative;">

                        <!-- <iframe allow="microphone; camera" style="border: 0; height: 100%; left: 0; position: absolute; top: 0; width: 100%;" 
                        sandbox="allow-forms allow-scripts allow-same-origin" src="https://zoom.us/wc/2413279838/join?prefer=1&un=admin" frameborder="0"></iframe> -->
                        
                        </div>
                        
                    </div>
                
            </div>
        </div>



    </body>

</html>