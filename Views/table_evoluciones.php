<form action="devolucion.php" action="post">
<table class="table  table-hover text-center bg-white">
                        
    <tbody>

    <?php for($x=1;$x<21;$x++){?>

        <tr>
        <td><button type="submit" name="client" value=<?php echo "'".$parameters['client']."'"; ?> class="btn tabBtn btn-link">Devolucion <?php echo $x ?></button></td>
        </tr>

    <?php } ?>
        
    </tbody>
</table>
</form>
