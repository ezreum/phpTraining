<?php session_start();?>
<!DOCTYPE html>

<html>

    <head>

        <title>template</title>

    </head>

    <body>
        
    <form action="arrayInsertPost.php" method="POST">

        <label>Nombre del producto a introducir</label>
        <input type="text" name="nombre"/>
		<br/>
        <label>Precio del producto</label>
        <input type="text" name="precio"/>
        <br/>
        <input type="submit" value="introducir producto"/>

    </form>
    <?php if (isset($_SESSION['inserciones'])):?>
    
    <h3>Inserciones realizadas</h3>

	<?php foreach ($_SESSION['inserciones'] as $insercion):?>
	<p><?= $insercion?></p>
	<?php endforeach;?>
	
	<?php endif;?>
    </body>

</html>

