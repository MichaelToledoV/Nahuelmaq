<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nahuelmaq</title>

        <link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/materialIcons.css">
        <link rel="stylesheet" href="chosen/chosen.min.css">
        
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.bundle.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
   

        
        <script src="chosen/chosen.jquery.min.js"></script>
        
    </head>
<body>
    <div id="topMenu"></div>
    
    <div>
        <h3>Vehiculos en taller</h3>
        <div class="container" style="background-color: #E6F0F2;padding: 2%">
        <div id="resultado"></div>
    	<div id="listarVehiculos"></div>
    	
    </div>

</div>
    <?php include("html/modal_addImages.php"); ?>
    <?php include("html/modal_selectVehTaller.php"); ?>  
    <?php include("html/modal_actividades.php"); ?>  
    <script src="js/clientes.js"></script>
    <script src="js/taller.js"></script>
    <script src="js/topMenu.js"></script>

</body>

</html>